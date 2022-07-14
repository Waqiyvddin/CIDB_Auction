<div>
    {{-- Stop trying to control. --}}
    <!-- component -->
    <div class="text-black">Product Group ID : {{ $productgroup_id }}</div>
    @if ($errors->any())
        <div class="alert alert-danger text-black">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="flex flex-col overflow-y-auto gap-4 rounded-md border-2 border-green-600 bg-white p-4">

        <!-- START drop files @ images div -->
        <div class="grid grid-flow-row grid-cols-5 sm:grid-cols-1 gap-2">
            @foreach ($image_no as $key => $index)
                <div
                    class="h-30 rounded-md border-2 border-dashed border-green-600 bg-white p-2 sm:h-64 sm:flex-row sm:p-4">
                    <div class="bg-white mx-2 sm:p-2">

                        <label for="dropzone-file"
                            class="mx-auto cursor-pointer flex max-w-lg flex-col items-center rounded-xl bg-white  text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>

                            <h2 class="mt-4 text-sm font-medium text-gray-700 tracking-wide">Product preview
                                {{ $index + 1 }}</h2>
                            @if (count($image_path) > 0 && array_key_exists($index, $image_path))
                                <img height="150" width="150" src="{{ asset($image_path[$index]) }}">
                            @endif
                            {{-- <p class="mt-2 text-gray-500 tracking-wide">Upload or darg & drop your file SVG, PNG, JPG or
                                GIF. </p> --}}
                            <div class="grid grid-flow-col w-full align-middle">
                                <input wire:model="product_picture.{{ $index }}" type="file" />
                                <div wire:loading wire:target="product_picture">Uploading...</div>
                            </div>

                        </label>

                    </div>
                </div>
                {{-- @if ($product_picture)
                    <img height="150" width="150" src="{{ $product_picture[$index]->temporaryUrl() }}">
                @endif --}}
            @endforeach

        </div>
        <div class="grid grid-flow-row grid-cols-5 gap-2">
            @if ($product_picture)
                @foreach ($product_picture as $item)
                    {{-- <button type="button"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    wire:click="$emit('openPreview2', '{{ $item->temporaryUrl() }}')">Preview</button> --}}
                    <img height="150" width="150" src="{{ $item->temporaryUrl() }}">
                @endforeach
            @endif
        </div>
        {{-- <div class="w-full">
            @php
                
                dd($product_picture);
            @endphp
        </div> --}}
        <!-- END drop files @ images div -->

        <div class="flex select-none flex-row gap-5 rounded-md  p-2 sm:h-auto sm:flex-row sm:p-4">
            <!-- START Prodct LEFT x3 SEC div -->
            <div class="flex h-auto flex-1 flex-col w-1/2 gap-5 rounded-md bg-white sm:p-2">
                <div class="flex flex-1 flex-col">
                    <div class="mb-2">
                        <label for="product_title"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Product
                            Title</label>
                        <input type="text" wire:model="product_title"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                            placeholder="Product Title" required />
                    </div>
                    <div class="mb-2">
                        <label for="product_description"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Product
                            Description</label>
                        <textarea id="product_description" wire:model="product_description" cols="20" rows="10"
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
                    <input type="text" wire:model="product_location"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Product Location" required />
                </div>
                <div class="mb-2">
                    <label for="product_category"
                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Product
                        Category</label>
                    <select id="product_category" name="product_category" wire:model="product_category" required
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
                    <input type="text" wire:model="product_price"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="RM" required />
                </div>
                <div class="mb-2">
                    <label for="product_condition"
                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Condition</label>
                    <select wire:model="product_condition"
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
                    <input type="integer" wire:model="product_quantity" wire:keydown.enter="add"
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
                            <input type="text" wire:model="product_asset_no.{{ $value }}"
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
                            <input type="text" wire:model="product_serial_no.{{ $value }}"
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
                        <input wire:model="product_isDiscounted" type="checkbox"
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
                            <input name="product_visibility" type="radio"
                                class="form-checkbox h-6 w-6 text-pink-500" value="PV01"
                                wire:model="product_visibility" />
                            <span class="ml-2 text-black text-sm">Staff</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input name="product_visibility" type="radio"
                                class="form-checkbox h-6 w-6 text-green-500" value="PV02"
                                wire:model="product_visibility" />
                            <span class="ml-2 text-black text-sm font-medium">Public</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- stock no div -->
        <div>
            <label for="product_visibility"
                class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Bidding event:</label>
            <div class="flex flex-row gap-2 text-sm text-gray-700">
                <label for="birthdaytime">Start Bid (date and time):</label>
                <input wire:model="bid_start_datetime" required class="text-blue-700" type="datetime-local"
                    id="birthdaytime" name="birthdaytime">

                <label for="birthdaytime">End Bid (date and time):</label>
                <input wire:model="bid_end_datetime" required class="text-blue-700" type="datetime-local"
                    id="birthdaytime" name="birthdaytime">
            </div>
            <div class="flex flex-row gap-2 text-sm text-gray-700">
                <label for="product_discount"
                    class="inline-flex items-center mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Loop
                    <input id="bid_isloop_id" wire:model="bid_isloop" type="checkbox" class="form-checkbox text-pink-500" />

                </label>
                <div id="div_duration" class="{{$showDivDuration}}">
                    <label for="birthdaytime">Duration (minute)</label>
                    <input wire:model="ifloop_duration" required class="text-blue-700 w-20 pl-3" type="number">
                </div>
            </div>
        </div>
    </div>

    <!-- START Button div -->
    <div class="flex flex-row items-center justify-end gap-5 rounded-md bg-white p-2 sm:h-auto sm:flex-row sm:p-4">
        <div class="flex h-auto flex-col rounded-xl sm:w-36">
            <button wire:click="backto_buylist()" class="btn-danger">Cancel</button>
        </div>
        <div class="flex h-auto flex-col rounded-xl sm:w-36">
            <button class="btn-gray" type="submit" wire:click="param('savedraft')">Save
                as draft</button>
        </div>
        <div class="flex h-auto flex-col rounded-xl sm:w-36">
            <button wire:click="preview()" class="btn-info">Preview Ad</button>
        </div>
        <div class="flex h-auto flex-col rounded-xl sm:w-36">
            <button class="btn-shadow" wire:click="param('post')">Post</button>
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

    <script>
        $(document).ready(function() {
            // $('#bid_isloop_id').change(function() {
            //     if (this.checked) {

            //         $('#div_duration').show();
            //     } else {
            //         $('#div_duration').hide();

            //     }
            // });
        });
    </script>

</div>
