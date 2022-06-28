<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Staf extends Component
{
    public $stafs;
    public $user_to_delete;
    public $isHidden = 'hidden';
    public $message = '';
    public $isHidden_message = 'hidden';

    public function mount()
    {
        $this->stafs = User::where('staf_no', '<>', null)->get();
    }

    public function render()
    {
        return view('livewire.staf');
    }

    public function openmodal_deleteuser($id)
    {
        // dd($id);
        $this->user_to_delete = User::find($id)->name;
        $this->isHidden = '';

        // $this->dispatchBrowserEvent('showModal', ['modal' => 'delete_user']);
    }

    public function closemodal_deleteuser()
    {
        $this->isHidden = 'hidden';
    }

    public function closemessage()
    {
        $this->isHidden_message = 'hidden';
    }

    public function deleteUser($id)
    {
        // User::where('id', $id)->delete();
        sleep(1/10);
        $this->isHidden = 'hidden';
        $this->isHidden_message = 'block';
        $this->message = "User has been deleted";
        
        
    }

    public function hideMessageDiv($timer)
    {
        sleep($timer);
        $this->isHidden_message = 'hidden';
    }

    function delayCommand($callback, $delayTime) {
        sleep($delayTime);
        $callback();
    }
}
