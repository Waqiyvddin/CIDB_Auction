<style>
    @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
</style>
<div class="w-full flex-row-reverse">
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
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

<div class="bg-white-500 grid grid-flow-col gap-4 p-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5">
    <!-- START first list item -->
    <div class="grid grid-flow-row gap-2 rounded-lg border-2 border-teal-400 p-2">
        <div class="grid grid-flow-col">
            <div class="font-bold uppercase text-red-500">00:00:09</div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-gavel" title="Add to Bidding Cart"></span>
            </div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-basket" title="Add to Buy Cart"></span>
            </div>
            <div class="font-bold underline"><a href=""> Bid Now</a></div>
        </div>

        <div class="">
            <img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3" alt="" title="" />
        </div>

        <div class="">DESC Lorem ipsum matakaji DESC Lorem ipsum matakaji</div>

        <div class="text-3xl font-bold">RM 9.99</div>

        <div class="text-gray-400">new /used</div>
    </div>
    <!-- END first list item -->

    <!-- START list item -->
    <div class="grid grid-flow-row gap-2 rounded-lg border-2 border-teal-400 p-2">
        <div class="grid grid-flow-col">
            <div class="font-bold uppercase text-red-500">00:00:09</div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-gavel" title="Add to Bidding Cart"></span>
            </div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-basket" title="Add to Buy Cart"></span>
            </div>
            <div class="font-bold underline"><a href=""> Bid Now</a></div>
        </div>

        <div class="">
            <img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3" alt="" title="" />
        </div>

        <div class="">DESC Lorem ipsum matakaji DESC Lorem ipsum matakaji</div>

        <div class="text-3xl font-bold">RM 9.99</div>

        <div class="text-gray-400">new /used</div>
    </div>
    <!-- END list item -->

    <!-- START list item -->
    <div class="grid grid-flow-row gap-2 rounded-lg border-2 border-teal-400 p-2">
        <div class="grid grid-flow-col">
            <div class="font-bold uppercase text-red-500">00:00:09</div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-gavel" title="Add to Bidding Cart"></span>
            </div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-basket" title="Add to Buy Cart"></span>
            </div>
            <div class="font-bold underline"><a href=""> Bid Now</a></div>
        </div>

        <div class="">
            <img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3" alt="" title="" />
        </div>

        <div class="">DESC Lorem ipsum matakaji DESC Lorem ipsum matakaji</div>

        <div class="text-3xl font-bold">RM 9.99</div>

        <div class="text-gray-400">new /used</div>
    </div>
    <!-- END list item -->

    <!-- START list item -->
    <div class="grid grid-flow-row gap-2 rounded-lg border-2 border-teal-400 p-2">
        <div class="grid grid-flow-col">
            <div class="font-bold uppercase text-red-500">00:00:09</div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-gavel" title="Add to Bidding Cart"></span>
            </div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-basket" title="Add to Buy Cart"></span>
            </div>
            <div class="font-bold underline"><a href=""> Bid Now</a></div>
        </div>

        <div class="">
            <img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3" alt="" title="" />
        </div>

        <div class="">DESC Lorem ipsum matakaji DESC Lorem ipsum matakaji</div>

        <div class="text-3xl font-bold">RM 9.99</div>

        <div class="text-gray-400">new /used</div>
    </div>
    <!-- END list item -->

    <!-- START list item -->
    <div class="grid grid-flow-row gap-2 rounded-lg border-2 border-teal-400 p-2">
        <div class="grid grid-flow-col">
            <div class="font-bold uppercase text-red-500">00:00:09</div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-gavel" title="Add to Bidding Cart"></span>
            </div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-basket" title="Add to Buy Cart"></span>
            </div>
            <div class="font-bold underline"><a href=""> Bid Now</a></div>
        </div>

        <div class="">
            <img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3" alt="" title="" />
        </div>

        <div class="">DESC Lorem ipsum matakaji DESC Lorem ipsum matakaji</div>

        <div class="text-3xl font-bold">RM 9.99</div>

        <div class="text-gray-400">new /used</div>
    </div>
    <!-- END list item -->

    <!-- START list item -->
    <div class="grid grid-flow-row gap-2 rounded-lg border-2 border-teal-400 p-2">
        <div class="grid grid-flow-col">
            <div class="font-bold uppercase text-red-500">00:00:09</div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-gavel" title="Add to Bidding Cart"></span>
            </div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-basket" title="Add to Buy Cart"></span>
            </div>
            <div class="font-bold underline"><a href=""> Bid Now</a></div>
        </div>

        <div class="">
            <img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3" alt="" title="" />
        </div>

        <div class="">DESC Lorem ipsum matakaji DESC Lorem ipsum matakaji</div>

        <div class="text-3xl font-bold">RM 9.99</div>

        <div class="text-gray-400">new /used</div>
    </div>
    <!-- END list item -->

    <!-- START list item -->
    <div class="grid grid-flow-row gap-2 rounded-lg border-2 border-teal-400 p-2">
        <div class="grid grid-flow-col">
            <div class="font-bold uppercase text-red-500">00:00:09</div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-gavel" title="Add to Bidding Cart"></span>
            </div>
            <div class="h-6 w-6 rounded-full bg-teal-400 text-center hover:bg-teal-600">
                <span class="mdi mdi-basket" title="Add to Buy Cart"></span>
            </div>
            <div class="font-bold underline"><a href=""> Bid Now</a></div>
        </div>

        <div class="">
            <img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3" alt="" title="" />
        </div>

        <div class="">DESC Lorem ipsum matakaji DESC Lorem ipsum matakaji</div>

        <div class="text-3xl font-bold">RM 9.99</div>

        <div class="text-gray-400">new /used</div>
    </div>
    <!-- END list item -->
</div>
