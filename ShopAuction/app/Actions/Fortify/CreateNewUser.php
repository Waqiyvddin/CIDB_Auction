<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        // dd($input['isStaf']);
        Validator::make(
            $input,
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                // 'stafno' => [ 'min:4'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            ],
            [
                'name.required' => 'Please insert your :attribute',
                'email.required' => 'Please insert your :attribute',
                'email.unique' => 'Please use other :attribute',
                'stafno.required' => 'Please insert your :attribute',
            ],
            [
                'stafno' => 'staf no'
            ]
        )->validate();

        // return User::create([
        //     'name' => $input['name'],
        //     'email' => $input['email'],
        //     'staf_no' => $input['stafno'],
        //     'password' => Hash::make($input['password']),
        // ]);

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'staf_no' => $input['stafno'],
            'password' => Hash::make($input['password']),
        ]);

        if(isset($input['isStaf'])){
            $user->assignRole([3]);
        }else{
            $user->assignRole([2]);
        }

        return $user;
        
    }
}
