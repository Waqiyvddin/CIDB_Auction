<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RolePermission extends Component
{
    public $list_roles;
    public $role_name;

    public function mount()
    {
        $this->list_roles= Role::all();
    }
    public function render()
    {
        return view('livewire.role-permission');
    }

    public function save_new_role()
    {
        $role = Role::create(['name' => $this->role_name]);
        // $role->syncPermissions($));
        $this->list_roles= Role::all();
    }
}
