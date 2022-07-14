<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ModalCart extends Component
{
    public $bidItems;
    public $buyItems;
    public $countBid = 0;
    public $countBuy = 0;


    protected $listeners = [
        'notify_modalcart' => 'notifyMe'
    ];

    public function render()
    {
        return view('livewire.modal-cart');
    }

    public function mount()
    {
        $this->refreshList();
    }

    public function notifyMe()
    {
        $this->refreshList();
    }

    public function refreshList()
    {
        // $this->bidItems = Cart::where('user_id', Auth::user()->id)->take(5)->get();
        // $this->buyItems = Cart::where('user_id', Auth::user()->id)->take(5)->get();
        $this->bidItems = Cart::where('user_id', Auth::user()->id)->take(5)
        ->with('productgroup')->whereHas('productgroup', function ($query)  
        {
            $query->where('for', 'PF02');
        })->get();
        $this->buyItems = Cart::where('user_id', Auth::user()->id)->take(5)
        ->with('productgroup')->whereHas('productgroup', function ($query)  
        {
            $query->where('for', 'PF01');
        })->get();
        $this->countBid = count($this->bidItems) ;
        $this->countBuy = count($this->buyItems);
        // dd($this->buyItems[0]->productgroup);
    }
}
