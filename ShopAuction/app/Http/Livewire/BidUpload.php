<?php

namespace App\Http\Livewire;

use App\Models\BidInfo;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGroup;
use App\Models\ProductGroupImage;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class BidUpload extends Component
{
    use WithFileUploads;

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
    public $product_isDiscounted;
    public $product_visibility;
    public $bid_start_datetime;
    public $bid_end_datetime;
    public $bid_isloop;
    public $showDivDuration = 'hidden';
    public $ifloop_duration;
    public $inputs = [];
    public $image_no = [];
    public $image_path = [];

    public function mount($productgroup_id)
    {
        $this->productgroup_id = $productgroup_id;

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

        $productgroup_image = ProductGroupImage::where('productgroup_id', $this->productgroup_id)->get();
        foreach ($productgroup_image as $key => $image) {
            for ($i = 0; $i < 5; $i++) {
                if ($image['image_index'] == $i) {
                    array_push($this->image_path, $image['image_path']);
                }
            }
        }

        for ($i = 0; $i < $this->product_quantity; $i++) {
            array_push($this->inputs, $i);
        }

        $bidinfo = BidInfo::where('productgroup_id', $this->productgroup_id)->get();
        if (count($bidinfo) > 0) {
            $bidinfo_startdate = $bidinfo[0]['start_date'];
            $bidinfo_starttime = $bidinfo[0]['start_time'];
            $bidinfo_enddate = $bidinfo[0]['end_date'];
            $bidinfo_endtime = $bidinfo[0]['end_time'];
            $this->bid_start_datetime = $bidinfo_startdate . 'T' . $bidinfo_starttime;
            $this->bid_end_datetime = $bidinfo_enddate . 'T' . $bidinfo_endtime;
            $this->bid_isloop = $bidinfo[0]['isLoop'];
            if ($this->bid_isloop == 1) {
                $this->bid_isloop = true;
                $this->showDivDuration = 'block';
                $this->ifloop_duration = $bidinfo[0]['duration_minute'];
            }else{
                $this->bid_isloop = false;
            }
        }
        // dd($this->image_path);
    }
    public function render()
    {
        return view('livewire.bid-upload');
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

        // dd($datetime);
        // dd($type);

        if ($type == 'savedraft') {
            $this->save_as_draft();
        }
    }

    public function save_as_draft()
    {
        // dd($this);

        $rule_b2 = 'mimes:jpg,jpeg';
        // dd('here');
        $this->validate(
            [
                'product_picture.*' => 'mimes:jpg,jpeg|max:6000',
                'product_title' => 'required|max:30',
                'product_category' => 'required',
                'ifloop_duration' => 'min:1',

            ],
            [
                // 'issue.0.required','issue.0.not_in' => 'Please fill :attribute',
                'product_picture.*.mimes' => 'File type must be jpeg/jpg',
                'product_picture.*.max' => 'Your file size must less than 6MB',
                'product_title.required' => 'Please fill :attribute',
                'product_category.required' => 'Please fill :attribute',
                'product_title.max' => 'Your title is too long. Max is 30 characters',
                'ifloop_duration.min' => 'Your loop duration must be more than 1 minute',

            ],
            [
                'product_picture' => 'Product picture',
                'product_title' => 'Product title',
                'product_category' => 'Product category',
                'ifloop_duration' => 'If loop',

            ]
        );

        $user = Auth::user();

        $product_group = ProductGroup::updateOrCreate(
            [
                'id' =>  $this->productgroup_id,
            ],
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
                'for' => 'PF02', //PF01=Buy
                'status' => 'PS01' //PS01=Draft

            ]
        );

        // dd($this->product_category);

        ProductCategory::updateOrCreate(
            [
                'productgroup_id' =>  $this->productgroup_id,
            ],
            [
                'subcategory' => $this->product_category,
            ]
        );

        foreach ($this->product_asset_no as $key => $value) {
            $product = Product::updateOrCreate(
                [
                    'productgroup_id' =>  $this->productgroup_id,
                ],
                [
                    'productgroup_id' => $this->productgroup_id,
                    'asset_no' => $this->product_asset_no[$key],
                    'serial_no' => $this->product_serial_no[$key],
                    'is_available' => 'Available',
                ]
            );
        }
        // dd(empty($this->product_picture));

        if (!empty($this->product_picture)) {
            foreach ($this->product_picture as $key => $image) {

                $fileName = time() . '_' . $this->productgroup_id .  '_' . $key;
                // $path = $this->business_reg_cert->store('public/bus_reg/pdf');
                $path = 'storage/' . $image->storeAs('productgroup_image/img', $fileName, 'public');

                $productgroup_image = ProductGroupImage::updateOrCreate(
                    [
                        'productgroup_id' =>  $this->productgroup_id,
                        'image_index' => $key,
                    ],
                    [
                        'image_path' => $path,
                        'image_name' => $fileName,
                        'image_index' => $key,

                    ]
                );
            }
        }
        // dd($this->bid_start_datetime);
        if (!$this->bid_isloop) {
            $this->ifloop_duration = 0;
            // $this->bid_isloop = '0';
        } else {
            // $this->bid_isloop = '1';
        }
        // dd($this->bid_isloop);
        // dd(intval($this->ifloop_duration));
        $bid_start_datetime = explode('T', $this->bid_start_datetime);
        $bid_end_datetime = explode('T', $this->bid_end_datetime);
        BidInfo::updateOrCreate(
            [
                'productgroup_id' =>  $this->productgroup_id,
            ],
            [
                'start_date' => $bid_start_datetime[0],
                'start_time' => $bid_start_datetime[1],
                'end_date' => $bid_end_datetime[0],
                'end_time' => $bid_end_datetime[1],
                'duration_minute' => ($this->ifloop_duration),
                'isLoop' => $this->bid_isloop
            ]
        );
        $this->refreshPage();
    }

    public function preview()
    {
        return redirect()->route('buypreview', array('productgroup_id' => $this->productgroup_id));
    }

    public function save_as_published()
    {
        # code...
    }

    public function updatedProductPicture()
    {
        // dd($this->product_picture);
    }

    public function refreshPage()
    {
        $this->image_path = []; //reset image path
        $this->product_picture = []; //reset temporary image
        $productgroup_image = ProductGroupImage::where('productgroup_id', $this->productgroup_id)->get();
        foreach ($productgroup_image as $key => $image) {
            for ($i = 0; $i < 5; $i++) {
                if ($image['image_index'] == $i) {
                    array_push($this->image_path, $image['image_path']);
                }
            }
        }
    }

    public function backto_buylist()
    {

        return redirect()->route('bidlist');
    }

    public function updatedBidIsloop()
    {
        // dd($this);
        if ($this->bid_isloop) {
            $this->showDivDuration = 'block';
        } else {
            $this->showDivDuration = 'hidden';
        }
    }
}
