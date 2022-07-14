<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}



    <div class="m-2 grid grid-cols-1 gap-2 rounded-md border-2 border-teal-500 p-2">
        <!-- START drop files @ images div -->
        <div class="grid grid-cols-4 gap-2 p-2 sm:grid-cols-1" style="height: 20rem">
            <!-- #1 -->
            <div
                class="flex col-span-3 select-none flex-col gap-5 rounded-md border-2 border-dashed border-green-600 bg-white p-2 sm:h-96 sm:flex-row sm:p-4">
                <div class="flex h-full flex-1 flex-col  sm:p-2">

                    <div class="carousel h-full w-full relative  mx-auto bg-gray-500" style="max-width:1600px;">
                        <div class="carousel-inner relative w-full overflow-hidden sm:h-80 h-full">
                            @foreach ($image_path as $index => $item)
                                <input class="carousel-open" type="radio" id="carousel-{{ $index + 1 }}"
                                    name="carousel" aria-hidden="true" hidden=""
                                    @if ($index == 0) checked="checked" @endif />
                                <div class="carousel-item absolute opacity-0 sm:h-80 h-full ">
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

            <!-- #2 -->
            <!-- product info -->
            <div class="col-span-1">
                <div class="mb-2">
                    <label for="product_title" class="block text-sm font-bold text-black dark:text-gray-300">{{$product_title }}</label>
                    <label for="product_description" class="mb-2">{{$product_description}}</label>
                </div>
            </div>
        </div>
        <!-- END drop files @ images div -->

        <div class="grid grid-cols-4 gap-2 sm:grid-cols-3">
            

            <!-- START div BIDDER INFO  by -->
            <div class="col-span-2">
                <div class="  ">
                    <table class="w-full table-fixed text-center">
                        <thead class="bg-teal-700">
                            <tr class="">
                                <th class="w-10"></th>
                                <th>User</th>
                                <th>Amount</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="h-14 border-b-teal-700">
                                <td>
                                    <span class="mdi mdi-24px mdi-trophy-outline text-teal-600"></span>
                                </td>
                                <td>Sterling</td>
                                <td>RM 77.77</td>
                                <td>00:23:44</td>
                            </tr>
                            <tr class="h-14 bg-teal-200">
                                <td></td>
                                <td>Eagles</td>
                                <td>RM 45.00</td>
                                <td>00:23:00</td>
                            </tr>
                            <tr class="h-14">
                                <td></td>
                                <td>Windy</td>
                                <td>RM 40.00</td>
                                <td>00:22:44</td>
                            </tr>
                            <tr class="h-14 bg-teal-200">
                                <td></td>
                                <td>Lenovo</td>
                                <td>RM 20.00</td>
                                <td>00:22:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END div BIDDER INFO by -->

            <!-- bid info -->
            <div class="col-span-2 grid grid-cols-1 gap-1 rounded-md border-2 border-teal-500">
                <div class="grid grid-rows-5 gap-1">
                    <!-- DETAIL -->
                    <div class="grid grid-cols-5">
                        <div class="place-self-center grid-cols-1 self-center text-center ">
                            <div
                                class=" place-self-end w-10  rounded-full border border-teal-700 bg-teal-700  text-center text-white ">
                                <span class="mdi mdi-24px mdi-gavel text-white"></span>
                            </div>
                        </div>
                        <div class="col-span-4 grid self-center p-1">
                            <div class="text-2xl font-bold">KERETA</div>
                            <div class=" ">Kereta kuning Lambo</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="grid grid-cols-5 place-items-center gap-1 p-4">
                            <div class="rounded-md bg-red-600 p-1 font-semibold text-white">23</div>
                            <div class="text-red-600">:</div>
                            <div class="rounded-md bg-red-600 p-1 font-semibold text-white">23</div>
                            <div class="text-red-600">:</div>
                            <div class="rounded-md bg-red-600 p-1 font-semibold text-white">23</div>
                        </div>
                        <div class="grid grid-cols-1"></div>
                    </div>
                    <div class="grid grid-cols-2 ">
                        <div class="grid grid-cols-1 self-center p-1 text-center">
                            <div class="custom-number-input h-10 w-auto">
                                <div class=" h-10 w-full rounded-lg relative bg-transparent mt-1 ">
                                    <input type="number"
                                        class=" rounded-lg border-2 py-2 border-teal-700  text-center w-full bg-white font-bold items-center text-gray-700 "
                                        name="custom-input-number" value="00.00"></input>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 self-center p-1">
                            <div class=" ">Current Bid</div>
                            <div class="font-bold">RM 66.00</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="grid grid-cols-1 self-center p-1 text-center">
                            <div
                                class="w-auto rounded-md border border-teal-700 bg-teal-900 py-2 text-center font-semibold text-white duration-75 hover:bg-teal-500">
                                <button class=" ">Place Bid</button>
                            </div>
                        </div>
                        <div class="col-start-2 grid grid-cols-1 self-center p-1">
                            <div class=" ">Current Winner</div>
                            <div class="font-bold">Rahim Sterling</div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2">
                        <div class="grid grid-cols-1 self-center p-1 text-center">
                            <div class=" h-10 w-full rounded-lg relative bg-transparent mt-1 ">
                                <input type="text"
                                    class=" rounded-lg border-2 py-2 border-teal-700  text-center w-full bg-white font-bold items-center text-gray-700 "
                                    placeholder="Discount Code"></input>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 self-center gap-2 p-1 ">
                            <div
                                class=" place-self-end w-10  rounded-full border border-teal-700 bg-white  text-center font-sem text-white duration-75 hover:bg-teal-200">
                                <button class=" ">
                                    <span class="mdi  mdi-24px mdi-heart-outline text-teal-700"></span>
                                </button>
                            </div>
                            <div
                                class="  w-10  rounded-full border border-teal-700 bg-white  text-center font-sem text-white duration-75 hover:bg-teal-200">
                                <button class=" ">
                                    <span class="mdi mdi-24px mdi-share-variant  text-teal-700"></span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- bid info END -->
        </div>
    </div>



</div>
