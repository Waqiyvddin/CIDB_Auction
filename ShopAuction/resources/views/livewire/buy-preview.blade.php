<div>
    {{-- Stop trying to control. --}}
    <!-- component -->
    <div class="text-black">Preview for Product Group ID : {{ $productgroup_id }}</div>

    <div class="flex flex-col overflow-y-auto gap-4 rounded-md border-2 border-green-600 bg-white p-4">

        {{-- CAROUSEL start --}}
        <div
            class="flex select-none flex-col gap-5 rounded-md border-2 border-dashed border-green-600 bg-white p-2 sm:h-96 sm:flex-row sm:p-4">
            <div class="flex h-auto flex-1 flex-col  sm:p-2">

                <div class="carousel container relative  mx-auto bg-gray-500" style="max-width:1600px;">
                    <div class="carousel-inner relative w-full overflow-hidden sm:h-80 h-56">
                        @foreach ($image_path as $index => $item)
                            <input class="carousel-open" type="radio" id="carousel-{{ $index + 1 }}" name="carousel"
                                aria-hidden="true" hidden=""
                                @if ($index == 0) checked="checked" @endif />
                            <div class="carousel-item absolute opacity-0 sm:h-80 h-56 ">
                                <div class="mx-auto block h-full w-full bg-cover bg-right pt-6 md:items-center md:pt-0"
                                    style="background-image: url('{{ asset($item) }}')">
                                    <!--  add any content in this box  -->
                                    <div class="container mx-auto"></div>
                                </div>
                            </div>

                            @php
                                // Carousel Index
                                if ($index == 0) {
                                    $str = 'carousel-' . $index + count($image_path);
                                } else {
                                    $str = 'carousel-' . $index;
                                }
                                
                                if ($index == 4) {
                                    $str2 = 'carousel-1';
                                } else {
                                    $str2 = 'carousel-' . $index + 2;
                                }
                            @endphp
                            <label for="{{ $str }}"
                                class="prev control-{{ $index + 1 }} absolute inset-y-0 left-0 z-10 my-auto ml-2 hidden h-10 w-10 cursor-pointer rounded-full bg-white bg-opacity-20 text-center text-3xl font-bold leading-tight text-black hover:bg-gray-900 hover:text-white md:ml-10">‹</label>
                            <label for="{{ $str2 }}"
                                class="next control-{{ $index + 1 }} absolute inset-y-0 right-0 z-10 my-auto mr-2 hidden h-10 w-10 cursor-pointer rounded-full bg-white bg-opacity-20 text-center text-3xl font-bold leading-tight text-black hover:bg-gray-900 hover:text-white md:mr-10">›</label>
                        @endforeach

                        <!-- slide indicators -->
                        <ol class="carousel-indicators">
                            @foreach ($image_path as $index => $item)
                                <li class="mr-3 inline-block">

                                    <label for="carousel-{{ $index + 1 }}"
                                        class="carousel-bullet block cursor-pointer text-4xl text-gray-400 hover:text-gray-900">•</label>

                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>

                <style>
                    .carousel-open:checked+.carousel-item {
                        position: static;
                        opacity: 100;
                    }

                    .carousel-item {
                        -webkit-transition: opacity 0.4s ease-in-out;
                        transition: opacity 0.4s ease-in-out;
                    }


                    #carousel-1:checked~.control-1,
                    #carousel-2:checked~.control-2,
                    #carousel-3:checked~.control-3,
                    #carousel-4:checked~.control-4,
                    #carousel-5:checked~.control-5 {
                        display: block;
                    }

                    .carousel-indicators {
                        list-style: none;
                        margin: 0;
                        padding: 0;
                        position: absolute;
                        bottom: 2%;
                        left: 0;
                        right: 0;
                        text-align: center;
                        z-index: 10;
                    }

                    #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
                    #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
                    #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet,
                    #carousel-4:checked~.control-4~.carousel-indicators li:nth-child(4) .carousel-bullet,
                    #carousel-5:checked~.control-5~.carousel-indicators li:nth-child(5) .carousel-bullet {
                        color: #000;
                        /*Set to match the Tailwind colour you want the active one to be */
                    }
                </style>


            </div>
        </div>
        {{-- CAROUSEL end --}}

        <div class="flex select-none flex-row gap-5 rounded-md  p-2 sm:h-auto sm:flex-row sm:p-4">
            <!-- START Prodct LEFT x3 SEC div -->
            <div class="flex h-auto flex-1 flex-col w-1/2 gap-5 rounded-md bg-white sm:p-2">
                <div class="flex flex-1 flex-col">
                    <div class="mb-2">
                        <label for="product_title"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Product
                            Title</label>
                        <input type="text" wire:model="product_title" disabled
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                            placeholder="Product Title" required />
                    </div>
                    <div class="mb-2">
                        <label for="product_description"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Product
                            Description</label>
                        <textarea id="product_description" wire:model="product_description" disabled cols="20" rows="10"
                            placeholder="Description"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400""></textarea>
                    </div>
                </div>
            </div>
            <!-- END Prodct LEFT x3 SEC div -->

            <!-- START Prodct RIGHT x4 SEC div -->
            <div class="flex h-auto flex-col gap-5 sm:p-2 rounded-xl bg-white  sm:h-full sm:w-72">
                <div class="mb-2">
                    <label for="product_location"
                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Product
                        Location</label>
                    <input type="text" wire:model="product_location" disabled
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Product Location" required />
                </div>
                <div class="mb-2">
                    <label for="product_category"
                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Product
                        Category</label>
                    <select id="product_category" name="product_category" wire:model="product_category" disabled
                        class="form-select block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
                        <option>Please Choose</option>
                        @php
                            $firstValue = true;
                            $counter = 1;
                            $prevType = substr($global_product_category[0]->type_id, 0, 3);
                        @endphp
                        @foreach ($global_product_category as $item)
                            @php
                                $currentType = substr($item->type_id, 0, 3); //C01 ,C02 ,..
                                
                                if ($currentType != $prevType) {
                                    $prevType = $currentType;
                                    $firstValue = true;
                                }
                                
                            @endphp
                            @if (Request::old('product_category') == $item->type_id)
                                <option value="{{ $item->type_id }}" selected>
                                    {{ $item->type_name }}</option>
                            @else
                                @if ($currentType == $prevType)
                                    @if ($firstValue)
                                        <option disabled value="{{ $item->type_id }}"><span class="text-blue-500">
                                                {{ $item->type_name }}</span></option>
                                        @php $firstValue = false; @endphp
                                    @endif
                                    <option value="{{ $item->type_id }}">
                                        <p class="pl-4">
                                            &nbsp;&nbsp;&nbsp;&nbsp;{{ $item->subtype_name }}</p>
                                    </option>
                                @else
                                    @php
                                        // $prevType = $currentType;
                                        // $firstValue = true;
                                    @endphp
                                @endif
                            @endif
                            @php $counter++; @endphp
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="product_price"
                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
                    <input type="text" wire:model="product_price" disabled
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="RM" required />
                </div>
                <div class="mb-2">
                    <label for="product_condition"
                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Condition</label>
                    <select wire:model="product_condition" disabled
                        class="form-select block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
                        <option>Select</option>
                        <option value="New">New</option>
                        <option value="Used">Used</option>
                    </select>
                </div>
            </div>
            <!-- END Prodct RIGHT x4 SEC div -->
        </div>

        <!-- stock no div -->
        <div class="flex flex-col justify-start gap-5 rounded-md bg-white p-2 sm:h-auto sm:flex-row sm:p-4">
            <div class="flex flex-col gap-3 rounded-xl bg-white sm:w-36">
                <div class="mb-2">
                    <label for="product_stock" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                        Stock
                        <span class="italic text-gray-700 text-sm">( Insert a value and ENTER, maximum 100 )</span>
                    </label>
                    <input type="integer" wire:model="product_quantity" wire:keydown.enter="add" disabled
                        class="block w-20 rounded-lg border border-gray-300 bg-gray-50 pl-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Quantity" required />
                </div>
            </div>
            {{-- <div class="flex h-auto flex-col rounded-xl bg-white sm:w-60">
                <div class="mb-2">
                    <label for="product_serial_no"
                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Serial
                        Number</label>
                    <input type="text" id="product_serial_no"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Product Serial Number" required />
                </div>
            </div> --}}
            <div class="md:col-span-5 grid grid-cols-2 md:grid-cols-2 gap-2">
                <div class="">

                    <div class="mb-2">
                        <label for="product_asset_no"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Asset
                            Number</label>
                        @foreach ($inputs as $key => $value)
                            <input type="text" wire:model="product_asset_no.{{ $value }}" disabled
                                class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                placeholder="Product Assest Number" required />
                        @endforeach

                    </div>

                </div>
                <div class="">

                    <div class="mb-2">
                        <label for="product_serial_no"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Serial
                            Number</label>
                        @foreach ($inputs as $key => $value)
                            <input type="text" wire:model="product_serial_no.{{ $value }}" disabled
                                class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 "
                                placeholder="Product Serial Number" required />
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="flex h-auto flex-col rounded-xl bg-white sm:w-36">
                <div class="mb-2">
                    <label for="product_discount"
                        class="inline-flex items-center mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Eligible
                        for
                        discount
                        <input wire:model="product_isDiscounted" type="checkbox" disabled
                            class="form-checkbox h-6 w-6 text-pink-500" />

                    </label>
                    {{-- <label class="flex items-center relative w-max cursor-pointer select-none ">
                        <input type="checkbox"
                            class="appearance-none transition-colors cursor-pointer w-14 h-7 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-black focus:ring-green-500 bg-red-500" />
                        <span class="absolute font-medium text-xs uppercase right-1 text-white"> OFF </span>
                        <span class="absolute font-medium text-xs uppercase right-8 text-white"> ON </span>
                        <span
                            class="w-7 h-7 right-7 absolute rounded-full transform transition-transform bg-gray-300" />
                    </label> --}}
                </div>
            </div>
            <div class="flex h-auto flex-col rounded-xl bg-white sm:w-36">
                <div class="mb-2">
                    <label for="product_visibility"
                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Product
                        Visibility</label>
                    <div class="flex flex-row gap-4">
                        <label class="inline-flex items-center">
                            <input name="product_visibility" type="radio" disabled
                                class="form-checkbox h-6 w-6 text-pink-500" value="PV01"
                                wire:model="product_visibility" />
                            <span class="ml-2 text-black">Staff</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input name="product_visibility" type="radio" disabled
                                class="form-checkbox h-6 w-6 text-green-500" value="PV02"
                                wire:model="product_visibility" />
                            <span class="ml-2 text-black">Public</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- stock no div -->
    </div>

    <!-- START Button div -->
    <div class="flex flex-row items-center justify-end gap-5 rounded-md bg-white p-2 sm:h-auto sm:flex-row sm:p-4">
        <div class="flex h-auto flex-col rounded-xl sm:w-36">
            <button wire:click="backtoedit()" class="btn-danger">Back</button>
        </div>
    </div>
    <!-- END stock no div -->



    <style>
        body {
            background-color: #171717;
            /* bg-true-gray-900 */
            color: white;
        }

        input:checked {
            background-color: #22c55e;
            /* bg-green-500 */
        }

        input:checked~span:last-child {
            --tw-translate-x: 1.75rem;
            /* translate-x-7 */
        }
    </style>
</div>
