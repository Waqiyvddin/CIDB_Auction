<div>
    {{-- Stop trying to control. --}}
    <!-- component -->

    <!-- component -->
    <div class="bg-black p-4">
        <div class="flex flex-col gap-4 rounded-md border-2 border-green-600 bg-white p-4">

            <!-- START drop files @ images div -->
            <div
                class="flex select-none flex-col gap-5 rounded-md border-2 border-dashed border-green-600 bg-white p-2 sm:h-64 sm:flex-row sm:p-4">
                <div class="flex h-auto flex-1 flex-col gap-5 bg-white sm:p-2">
                    <div class="flex flex-1 flex-col gap-3">
                        <label for="dropzone-file"
                            class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl bg-white  text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-36 w-36 text-green-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>

                            <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide">Payment File</h2>

                            <p class="mt-2 text-gray-500 tracking-wide">Upload or darg & drop your file SVG, PNG, JPG or
                                GIF. </p>

                            <input id="dropzone-file" multiple type="file" class="hidden" />
                        </label>
                    </div>
                </div>
            </div>
            <!-- END drop files @ images div -->

            <div class="flex select-none flex-col gap-5 rounded-md  p-2 sm:h-auto sm:flex-row sm:p-4">
                <!-- START Prodct LEFT x3 SEC div -->
                <div class="flex h-auto flex-1 flex-col gap-5 rounded-md bg-white  sm:p-2">
                    <div class="flex flex-1 flex-col gap-3">
                        <div class="mb-2">
                            <label for="product_title"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Product
                                Title</label>
                            <input type="text" id="product_title"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                placeholder="Product Title" required />
                        </div>
                        <div class="mb-2">
                            <label for="product_description"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Product
                                Description</label>
                            <textarea id="product_description" cols="20" rows="10" placeholder="Description"
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
                        <input type="text" id="product_location"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="Product Description" required />
                    </div>
                    <div class="mb-2">
                        <label for="product_category"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Product
                            Category</label>
                        <select id="product_category"
                            class="form-select block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
                            <option>Prodcut Category</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="product_price"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
                        <input type="text" id="product_price"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="Product Description" required />
                    </div>
                    <div class="mb-2">
                        <label for="product_condition"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Condition</label>
                        <select id="product_condition"
                            class="form-select block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
                            <option> Condition</option>
                            <option>New</option>
                            <option>Used</option>
                        </select>
                    </div>
                </div>
                <!-- END Prodct RIGHT x4 SEC div -->
            </div>

            <!-- stock no div -->
            <div class="flex flex-col justify-start gap-5 rounded-md bg-white p-2 sm:h-auto sm:flex-row sm:p-4">
                <div class="flex h-auto flex-col gap-3 rounded-xl bg-white sm:w-36">
                    <div class="mb-2">
                        <label for="product_stock"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Stock</label>
                        <input type="integer" id="product_stock"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="Product Description" required />
                    </div>
                </div>
                <div class="md:col-span-5 grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="">

                        <div class="mb-2">
                            <label for="product_assest_no"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Assest
                                Number</label>
                            <input type="text" id="product_assest_no"
                                class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                placeholder="Product Assest Number" required />
                            <input type="text" id="product_assest_no"
                                class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                placeholder="Product Assest Number" required />
                            <input type="text" id="product_assest_no"
                                class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                placeholder="Product Assest Number" required />
                            <input type="text" id="product_assest_no"
                                class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                placeholder="Product Assest Number" required />

                        </div>

                    </div>
                    <div class="">

                        <div class="mb-2">
                            <label for="product_serial_no"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Serial
                                Number</label>
                            <input type="text" id="product_serial_no"
                                class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 "
                                placeholder="Product Serial Number" required />
                            <input type="text" id="product_serial_no"
                                class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 "
                                placeholder="Product Serial Number" required />
                            <input type="text" id="product_serial_no"
                                class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 "
                                placeholder="Product Serial Number" required />
                            <input type="text" id="product_serial_no"
                                class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 "
                                placeholder="Product Serial Number" required />

                        </div>
                    </div>
                </div>
                <div class="flex h-auto flex-col rounded-xl bg-white sm:w-36">
                    <div class="mb-2">
                        <label for="product_discount"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Eligible for
                            discount</label>
                        <label class="flex items-center relative w-max cursor-pointer select-none ">
                            <input type="checkbox"
                                class="appearance-none transition-colors cursor-pointer w-14 h-7 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-black focus:ring-green-500 bg-red-500" />
                            <span class="absolute font-medium text-xs uppercase right-1 text-white"> OFF </span>
                            <span class="absolute font-medium text-xs uppercase right-8 text-white"> ON </span>
                            <span
                                class="w-7 h-7 right-7 absolute rounded-full transform transition-transform bg-gray-300" />
                        </label>
                    </div>
                </div>
                <div class="flex h-auto flex-col rounded-xl bg-white sm:w-36">
                    <div class="mb-2">
                        <label for="product_visibility"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Product
                            Visibility</label>
                        <div class="flex flex-row gap-4">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox h-6 w-6 text-pink-500" checked />
                                <span class="ml-2 text-black">Staff</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox h-6 w-6 text-green-500" checked />
                                <span class="ml-2 text-black">Public</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- stock no div -->
        </div>

        <!-- START Button div -->
        <div class="flex flex-col items-center justify-end gap-5 rounded-md bg-white p-2 sm:h-auto sm:flex-row sm:p-4">
            <div class="flex h-auto flex-col rounded-xl sm:w-36">
                <button
                    class="bg-white-500 inline-block w-36 rounded-md border border-green-700 py-2 font-semibold text-green-800 shadow-md duration-75 hover:bg-green-400">Cancel</button>
            </div>
            <div class="flex h-auto flex-col rounded-xl sm:w-36">
                <button
                    class="bg-white-500 inline-block w-36 rounded-md border border-green-700 py-2 font-semibold text-green-800 shadow-md duration-75 hover:bg-green-400">Save
                    as draft</button>
            </div>
            <div class="flex h-auto flex-col rounded-xl sm:w-36">
                <button
                    class="bg-white-500 inline-block w-36 rounded-md border border-green-700 bg-emeralr-600 py-2 font-semibold text-green-800 shadow-md duration-75 hover:bg-green-400">Preview
                    Ad</button>
            </div>
            <div class="flex h-auto flex-col rounded-xl sm:w-36">
                <button
                    class="inline-block w-36 rounded-md border border-green-700 bg-green-600 py-2 font-semibold text-white shadow-md duration-75 hover:bg-green-400">Post</button>
            </div>
        </div>
        <!-- END stock no div -->
    </div>



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
