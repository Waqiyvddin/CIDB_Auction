<div>
    {{-- The best athlete wants his opponent at his best. --}}
    {{-- <div class="items-center flex flex-row gap-3">
        <div class="h-10 w-10 pt-2 align-middle rounded-full bg-yellow-400 text-center hover:bg-yellow-600">
            <span class="mdi mdi-gavel bg-yellow-400 hover:bg-yellow-600" title="Add to Bidding Cart"></span>
        </div>
        <div class="h-10 w-10 pt-2 align-middle rounded-full bg-teal-400 text-center hover:bg-teal-600">
            <span class="mdi mdi-basket bg-teal-400 hover:bg-teal-600 p-3 rounded-full" title="Add to Buy Cart"></span>
        </div>
    </div> --}}
    <div class="flex flex-row">
        <div class="dropdown relative mr-5 md:static">

            <button
                class="text-gray-500 menu-btn p-1 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
                <i class="mdi mdi-gavel text-xl"></i>
                <span
                    class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ $countBid }}</span>
            </button>

            <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

            <div
                class="menu hidden rounded bg-white md:right-0 md:w-full shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
                <!-- top -->
                <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                    <h1>List of Bid</h1>
                    <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                        <strong>{{ $countBid }}</strong>
                    </div>
                </div>
                <hr>
                <!-- end top -->

                <!-- body -->


                @if ($countBid > 0)
                    @foreach ($bidItems as $item)
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                                <i class="mdi mdi-gavel text-sm"></i>
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    {{-- <h1 class="text-sm font-semibold">time is up..</h1> --}}
                                    <p class="text-xs text-gray-500">{{ $item->productgroup->title }}</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>RM @php echo number_format(($item->productgroup->price / 1), 2, '.', ','); @endphp</p>
                                </div>
                            </div>

                        </a>
                    @endforeach
                @endif


                <!-- end body -->

                <!-- bottom -->
                <hr>
                <div class="px-4 py-2 mt-2">
                    <a href="#"
                        class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                        view all
                    </a>
                </div>
                <!-- end bottom -->
            </div>
        </div>

        <div class="dropdown relative mr-5 md:static">

            <button
                class="text-gray-500 menu-btn p-1 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
                <i class="mdi mdi-basket text-xl"></i>
                <span
                    class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ $countBuy }}</span>
            </button>

            <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

            <div
                class="menu hidden rounded bg-white md:right-0 md:w-full shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
                <!-- top -->
                <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                    <h1>List of Buy</h1>
                    <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                        <strong>{{ $countBuy }}</strong>
                    </div>
                </div>
                <hr>
                <!-- end top -->

                <!-- body -->


                @if ($countBuy > 0)
                    @foreach ($buyItems as $item)
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                                <i class="mdi mdi-basket text-sm"></i>
                            </div>

                            <div class="flex-1 flex flex-row bg-green-100">
                                <div class="flex-1">
                                    {{-- <h1 class="text-sm font-semibold">time is up..</h1> --}}
                                    <p class="text-xs text-gray-500">{{ $item->productgroup->title }}</p>
                                </div>
                                <div class="flex-1">
                                    {{-- <h1 class="text-sm font-semibold">time is up..</h1> --}}
                                    <p class="text-xs text-gray-500">Total: {{ $item->quantity }}</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>RM @php echo number_format(($item->productgroup->price / 1), 2, '.', ','); @endphp</p>
                                </div>
                            </div>

                        </a>
                    @endforeach
                @endif


                <!-- end body -->

                <!-- bottom -->
                <hr>
                <div class="px-4 py-2 mt-2">
                    <a href="#"
                        class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                        view all
                    </a>
                </div>
                <!-- end bottom -->
            </div>
        </div>

        {{-- Test --}}
        <div class="dropdown relative mr-5 md:static">

            <button
                class="text-gray-500 menu-btn p-1 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
                <i class="mdi mdi-gavel text-xl"></i>
                <span
                    class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ $countBid }}</span>
            </button>

            <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

            <div
                class="menu hidden rounded bg-white md:right-0 md:w-full shadow-md absolute z-20 right-0 w-96 mt-5 py-2 animated faster">
                <!-- top -->
                <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                    <h1>List of Bid</h1>
                    <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                        <strong>{{ $countBid }}</strong>
                    </div>
                </div>
                <hr>
                <!-- end top -->

                <!-- body -->

                <table class="w-full text-sm ml-3 text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class=""></th>
                            <th class="text-left">Name</th>
                            <th class="px-2 text-right">Price</th>
                            <th class="px-2">Quantity</th>
                        </tr>
                    </thead>
                    @if ($countBid > 0)
                        <tbody>
                            @foreach ($bidItems as $item)
                                <tr class="">
                                    <th class="pr-2"><i class="mdi mdi-basket text-sm"></i></th>
                                    <th class="text-left">{{ $item->productgroup->title }}</th>
                                    <th class="text-right">RM @php echo number_format(($item->productgroup->price / 1), 2, '.', ','); @endphp</th>
                                    <th class="px-2">{{ $item->quantity }}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    @endif
                </table>

                <!-- bottom -->
                <hr>
                <div class="px-4 py-2 mt-2">
                    <a href="#"
                        class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                        view all
                    </a>
                </div>
                <!-- end bottom -->
            </div>
        </div>
    </div>
</div>
