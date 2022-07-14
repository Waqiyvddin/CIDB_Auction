<div>
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
    </style>
    <div class=" max-h-screen overflow-y-auto">
        <div class="w-full flex-row-reverse">
            @if (!$isLoggedin)
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endif
        </div>
        <div class="flex select-none flex-row gap-1 rounded-md sm:flex-row">
            <!-- START Prodct Search SEC div -->
            <div class="flex h-auto flex-1 flex-col sm:p-2">
                <div class="flex flex-1 flex-col">
                    <div class="w-full rounded-2xl">
                        <div class="flex h-8">
                            <select id="product_category"
                                class="form-select block w-full rounded-lg border-2 border-teal-400 bg-gray-50 p-1 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
                                <option>Product Category</option>
                                <option>Option #1</option>
                                <option>Option #2</option>
                                <option>Option #3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Prodct Search SEC div -->

            <!-- START Prodct Search SEC div -->
            <div class="flex h-auto flex-1 flex-col sm:p-2">
                <div class="flex flex-1 flex-col">
                    <div class="w-full rounded-2xl">
                        <div class="flex h-8">
                            <select id="product_category"
                                class="form-select block w-full rounded-lg border-2 border-teal-400 bg-gray-50 p-1 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
                                <option>Product Category</option>
                                <option>Option #1</option>
                                <option>Option #2</option>
                                <option>Option #3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Prodct Search SEC div -->

            <!-- START Prodct Search SEC div -->
            <div class="flex h-auto flex-1 flex-col sm:p-2">
                <div class="flex flex-1 flex-col">
                    <div class="w-full rounded-2xl">
                        <div class="flex h-8">
                            <select id="product_category"
                                class="form-select block w-full rounded-lg border-2 border-teal-400 bg-gray-50 p-1 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
                                <option>Product Category</option>
                                <option>Option #1</option>
                                <option>Option #2</option>
                                <option>Option #3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Prodct Search SEC div -->

            <!-- START Prodct Search SEC div -->
            <div class="flex h-auto flex-1 flex-col sm:p-2">
                <div class="flex flex-1 flex-col">
                    <div class="w-full rounded-2xl">
                        <div class="flex h-8">
                            <select id="product_category"
                                class="form-select block w-full rounded-lg border-2 border-teal-400 bg-gray-50 p-1 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
                                <option>Product Category</option>
                                <option>Option #1</option>
                                <option>Option #2</option>
                                <option>Option #3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Prodct Search SEC div -->

            <div class="center p-2 rounded-2xl">
                <button class="w-auto px-6 rounded-md bg-teal-600 h-8 text-black hover:bg-teal-400">Apply</button>
            </div>
        </div>

        <div class="bg-white-500 grid grid-cols-5 gap-4 p-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5">
            <!-- START first list item -->
            @foreach ($product_group_list as $key => $item)
                {{-- Bid --}}

                <div class="grid grid-flow-row gap-2 rounded-lg border-2 border-teal-400 relative">
                    <div class="px-2 pt-2 pb-0">
                        <div class="grid grid-flow-col text-right ">
                            @if ($item->for == 'PF02')
                                <div class="font-bold uppercase text-red-500"></div>
                                @if ($this->isLoggedin == true)
                                    <div class="h-6 w-6 rounded-full bg-yellow-400 text-center hover:bg-teal-600">
                                        <span class="mdi mdi-gavel bg-yellow-300" title="Add to Bidding Cart"></span>
                                    </div>
                                    <div class="font-bold underline"><a class="cursor-pointer "
                                            wire:click="addToCart({{ $item->id }})">Bid Now</a></div>
                                    <div class="font-bold underline"><a class="cursor-pointer" href="{{route('openbiditem', $item->id)}}">Open</a></div>
                                @else
                                    {{-- open page detail product --}}
                                    <div class="h-6 w-6 rounded-full bg-yellow-400 text-center hover:bg-teal-600">
                                        <span class="mdi mdi-gavel bg-yellow-300" title="Add to Bidding Cart"></span>
                                    </div>
                                    <div class="font-bold underline"><a class="cursor-pointer"
                                            href="{{ route('register') }}"> Bid Now</a>
                                    </div>
                                @endif
                            @endif
                            @if ($item->for == 'PF01')
                                <div class="font-bold uppercase text-red-500"></div>

                                @if ($this->isLoggedin == true)
                                    {{-- open page detail product --}}
                                    <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                                        <span class="mdi mdi-basket bg-teal-300" title="Add to Buy Cart"></span>
                                    </div>
                                    <div class="font-bold underline"><a class="cursor-pointer "
                                            wire:click="addToCart({{ $item->id }})">Buy Now</a></div>
                                @else
                                    <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                                        <span class="mdi mdi-basket bg-teal-300" title="Add to Buy Cart"></span>
                                    </div>
                                    <div class="font-bold underline"><a class="cursor-pointer "
                                            href="{{ route('register') }}">Buy Now</a></div>
                                @endif
                            @endif
                        </div>

                        <div class="flex flex-col mt-2">
                            <img class=" w-50 h-40"
                                src="@if (count($item['images']) > 0) {{ asset($item['images'][0]->image_path) }} @endif"
                                alt="" title="" />
                        </div>

                        <div class=" h-5">{{ $item->title }}</div>

                        <div class="text-2xl font-bold">RM @php echo number_format(($item->price / 1), 2, '.', ','); @endphp</div>
                        <div class="flex flex-row w-full">
                            <div class="text-gray-400 float-left">{{ $item->condition }}</div>
                            <div class="text-gray-400 float-right">Stock: {{ $item->quantity }}</div>
                        </div>
                    </div>
                    @if (in_array($item->id, $product_in_cart))
                        <div style="height: 37px"
                            class=" bg-teal-800 rounded-b-md p-2 text-sm text-gray-100 bottom-0 w-full align-bottom">
                            <span class="text-center">Saved in cart</span>
                        </div>
                    @endif

                </div>
                <!-- END first list item -->
            @endforeach
            <!-- START list item -->

        </div>
    </div>

    @section('js')
    @endsection
</div>
