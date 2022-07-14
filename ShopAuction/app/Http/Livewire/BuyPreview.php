<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGroup;
use App\Models\ProductGroupImage;
use Livewire\Component;

class BuyPreview extends Component
{
    public $productgroup_id;
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
    public $image_path = [];

    public function mount($productgroup_id)
    {
        $this->productgroup_id = $productgroup_id;

        for ($i = 0; $i < $this->product_quantity; $i++) {
            array_push($this->inputs, $i);
        }

        for ($i = 0; $i < 5; $i++) {
            array_push($this->image_no, $i);
        }

        $get_productGroup = ProductGroup::find($this->productgroup_id);

        $this->product_title = $get_productGroup->title;
        $this->product_description = $get_productGroup->description;
        $this->product_location = $get_productGroup->location;
        // $this->product_category = $get_productGroup->
        $this->product_price = $get_productGroup->price;
        $this->product_condition = $get_productGroup->condition;
        $this->product_quantity = $get_productGroup->quantity;
        $this->product_isDiscounted = intval($get_productGroup->isDiscounted);
        $this->product_visibility = $get_productGroup->visibility;

        // dd($this->product_isDiscounted);

        $get_product_category = ProductCategory::where('productgroup_id', $this->productgroup_id)->get();
        if (count($get_product_category) > 0) {
            $this->product_category = $get_product_category[0]->subcategory ?? NULL;
        }

        // dd($get_product_category);

        $products = Product::where('productgroup_id', $this->productgroup_id)->get();
        foreach ($products as $product) {
            $this->product_asset_no[] = $product->asset_no;
            $this->product_serial_no[] = $product->serial_no;
        }

        $this->refreshPage();
    }

    public function render()
    {
        return view('livewire.buy-preview');
    }

    public function refreshPage()
    {
        $this->image_path = []; //reset image path
        
        $productgroup_image = ProductGroupImage::where('productgroup_id', $this->productgroup_id)->get();
        foreach ($productgroup_image as $key => $image) {
            for ($i = 0; $i < 5; $i++) {
                if ($image['image_index'] == $i) {
                    array_push($this->image_path, $image['image_path']);
                }
            }
        }
    }

    public function backtoedit()
    {
        return redirect()->route('buyupload', array('productgroup_id' => $this->productgroup_id));
    }
}
