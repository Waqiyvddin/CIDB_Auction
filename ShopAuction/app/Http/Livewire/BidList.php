<?php

namespace App\Http\Livewire;

use App\Models\ProductGroup;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BidList extends Component
{
    protected $listeners = ['createProductGroup' => 'createProductGroup'];

    public $product_group_list;
    public $id_to_delete;

    public function mount()
    {
        $this->product_group_list = ProductGroup::where('for', 'PF02')->get();
        // dd($this->product_group_list);
    }

    public function render()
    {
        return view('livewire.bid-list');
    }

    public function createProductGroup()
    {
        $product_group = ProductGroup::create([
            'created_by' => Auth::user()->id,
            'isDiscounted' => 0,
            'visibility' => 'PV01', //staf
            'for' => 'PF02', //buy
            'status' => 'PS01'
        ]);
        // dd($product_group);
        return redirect()->route('bidupload', array('productgroup_id' => $product_group->id));
    }

    public function setDeleteId($id)
    {
        $this->id_to_delete = $id;
        $this->dispatchBrowserEvent('showDeleteModal');
    }

    public function delete()
    {
        $this->dispatchBrowserEvent('showModal', ['message' => "Data deleted"]);
    }
}
