<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\ProductGroup;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class BuyUpload extends Component
{

    use WithFileUploads;

    public $product_picture = [];
    public $product_title;
    public $product_description;
    public $product_location;
    public $product_category;
    public $product_price;
    public $product_condition;
    public $product_quantity = 1;
    public $product_asset_no = [];
    public $product_serial_no = [];
    public $product_isDiscounted = false;
    public $product_visibility;
    public $inputs = [];
    public $image_no = [];


    public function mount()
    {
        for ($i = 0; $i < $this->product_quantity; $i++) {
            array_push($this->inputs, $i);
        }

        for ($i = 0; $i < 5; $i++) {
            array_push($this->image_no, $i);
        }

        $this->product_visibility = "Staff";
    }
    public function render()
    {
        return view('livewire.buy-upload');
    }

    public function add()
    {
        $this->inputs = [];
        if ($this->product_quantity > 100) {
            $this->product_quantity = 100;
        }
        for ($i = 0; $i < $this->product_quantity; $i++) {
            array_push($this->inputs, $i);
        }
    }

    public function param($type)
    {
        // dd($this);
        // dd($type);

        if ($type == 'savedraft') {
            $this->save_as_draft();
        }
    }

    public function save_as_draft()
    {
        // dd($this);



        $rule_b2 = 'mimes:jpg,jpeg';

        $this->validate(
            [
                'product_picture.*' => 'mimes:jpg,jpeg|max:6000',
                'product_title' => 'required|max:30',

            ],
            [
                // 'issue.0.required','issue.0.not_in' => 'Please fill :attribute',
                'product_picture.*.mimes' => 'File type must be jpeg/jpg',
                'product_picture.*.max' => 'Your file size must less than 6MB',
                'product_title.required' => 'Please fill :attribute',
                'product_title.max' => 'Your title is too long. Max is 30 characters',

            ],
            [
                'product_picture' => 'Product picture',
                'product_title' => 'Product title',

            ]
        );

        $user = Auth::user();

        $product_group = ProductGroup::create(
            [
                'title' => $this->product_title,
                'location' => $this->product_location,
                'description' => $this->product_description,
                'price' => $this->product_price,
                'quantity' => $this->product_quantity,
                'condition' => $this->product_condition,
                'isDiscounted' => $this->product_isDiscounted,
                // 'discount_percent'=> $this->
                'visibility' => $this->product_visibility,
                'for' => 'PF01', //PF01=Buy
                'status' => 'PS01' //PS01=Draft

            ]
        );

        foreach ($this->product_asset_no as $key => $value)
            $product = Product::create(
                [
                    'productgroup_id' => $product_group->id,
                    'asset_no' => $this->product_asset_no[$key],
                    'serial_no' => $this->product_serial_no[$key],
                    'is_available' => 'Available',
                ]
            );
    }

    public function updatedProductPicture()
    {
        // dd($this->product_picture);
    }
}
