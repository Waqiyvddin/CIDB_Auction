<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\ProductGroup;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class Splash extends Component
{
    public $isLoggedin;
    public $product_group_list;
    public $product_in_cart = [];

    public function mount()
    {
        $this->isLoggedin = false;

        if (count(request()->segments()) === 0) {
            $this->isLoggedin = false;
        } else {
            $this->isLoggedin = true;
        }

        if ($this->isLoggedin == true) {
            $this->refreshData();
        }

        if ($this->isLoggedin == false) {
            $this->product_group_list = ProductGroup::where('visibility', 'PV02')->get();
        }

        // dd($user);


        // dd($this->product_group_list);
    }

    public function render()
    {
        if ($this->isLoggedin == false) {
            return view('livewire.splash')->layout('layouts.public');
        } else {
            return view('livewire.splash');
        }
    }

    public function addToCart($item_id)
    {
        // dd($item_id);
        $productgroup =  ProductGroup::find($item_id);
        $itemInCart = Cart::where('productgroup_id', $item_id)->get();
        $value = 1;
        // buy
        if ($productgroup->for == "PF01" && count($itemInCart) > 0) {

            if ($productgroup->quantity > $itemInCart[0]->quantity) {
                // send message stock not available
                $value = intval($itemInCart[0]->quantity) + 1;
            } else {
                $this->dispatchBrowserEvent('showModal', ['message' => "Stock not available"]);
                return;
            }
        }
        // bid
        if ($productgroup->for == "PF02" && count($itemInCart) > 0) {
            $this->dispatchBrowserEvent('showModal', ['message' => "Item bid already in cart"]);
            return;
        }




        // dd($value);
        Cart::updateOrCreate(
            [
                'productgroup_id' => $item_id,
            ],
            [
                'productgroup_id' => $item_id,
                'quantity' => $value,
                'user_id' => Auth::id(),
            ]
        );
        $this->refreshData();
        $this->emit('notify_modalcart');
    }

    private function refreshData()
    {
        $user = Auth::user();

        if ($user->hasAnyRole('Staf', 'Admin', 'Super-Admin')) {
            $this->product_group_list = ProductGroup::all();
            // $this->product_in_cart = Cart::all()->pluck('productgroup_id');

            // dd($this->product_in_cart);
        }

        if ($user->hasAnyRole('Public')) {
            $this->product_group_list = ProductGroup::where('visibility', 'PV02')->get();
        }

        $this->product_in_cart = Cart::all()->pluck('productgroup_id')->toArray();
        // dd($this->product_in_cart);
    }
}
