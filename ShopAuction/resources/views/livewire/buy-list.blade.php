<div>
    {{-- Be like water. --}}
    <!-- for icon -->
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
    </style>
    <div>
        <p>Buy products</p>
    </div>
    <div class="flex flex-row-reverse sm:grid-cols-4 p-2">
        <div class="">
            <a wire:click="$emit('createProductGroup')"
                class="mx-auto block w-full max-w-xs rounded-lg bg-teal-700 px-3 py-2 text-white hover:bg-teal-500 focus:bg-teal-500">Upload
                new item</a>
        </div>
    </div>

    <!-- START filter Dropdown @ Modal  -->
    <div class="grid grid-cols-4 gap-1 p-1 md:grid-cols-10">
        <div class="p-2 md:col-span-2">
            <select title="AAA" id="product_category"
                class="form-select block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
                <option>Prodcut Category</option>
                <option>Option #1</option>
                <option>Option #2</option>
                <option>Option #3</option>
            </select>
        </div>
        <div class="p-2 md:col-span-2">
            <select title="BBB" id="product_category"
                class="form-select block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
                <option>Prodcut Category</option>
                <option>Option #1</option>
                <option>Option #2</option>
                <option>Option #3</option>
            </select>
        </div>
        <div class="p-2 md:col-span-5">
            <select title="CCC" id="product_category"
                class="form-select block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
                <option>Prodcut Category</option>
                <option>Option #1</option>
                <option>Option #2</option>
                <option>Option #3</option>
            </select>
        </div>
        <div class="p-2">
            <div
                class="just w-auto rounded-md border border-teal-700 bg-teal-900 py-1 px-4 text-center font-semibold text-white duration-75 hover:bg-teal-500">
                <button class="py-1">
                    <span class="mdi mdi-format-align-center"></span>
                    <!-- <div class=" w-auto items-center justify-center pl-1 text-center"><i class="mdi mdi-gear text-lg text-teal-600"></i></div> -->
                </button>
            </div>
        </div>
    </div>
    <!-- END filter Dropdown @ Modal  -->

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-green-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col"
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-400 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        {{ __('Product') }}
                    </th>
                    <th scope="col"
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        {{ __('Quantity') }}
                    </th>
                    <th scope="col"
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        {{ __('Price') }}
                    </th>
                    <th scope="col"
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        {{ __('Date listed') }}
                    </th>
                    <th scope="col"
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        {{ __('Status') }}
                    </th>
                    <th scope="col"
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        {{ __('Visibility') }}
                    </th>
                    <th scope="col"
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        <span class="sr-only">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product_group_list as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row"
                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            <div class="rounded-2xl ">
                                <img width="90" height="80" class="rounded-md"
                                    src="{{ asset($item->images[0]->image_path) }}" alt="" />
                                <p class="text-center md:py-1 md:font-bold">{{ $item->title }}</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->quantity }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->updated_at }}
                        </td>
                        <td class="px-6 py-4">
                            <span class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                <span aria-hidden class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                <span class="relative">
                                    {{ $item->status_name }}
                                </span>
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->visibility_name }}
                        </td>

                        <td class="flex flex-col px-6 py-4 text-center">
                            <a href="{{ route('buyupload', $item->id) }}"
                                class="px-1 py-1 m-1 font-medium text-white dark:text-blue-500 bg-blue-400 rounded cursor-pointer">Open</a>
                            <a wire:click="setDeleteId({{ $item->id }})"
                                class="px-1 py-1 m-1 font-medium text-white dark:text-red-400 bg-red-500 rounded cursor-pointer">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- Modal Message --}}
    <div wire:ignore.self id="modal"
        class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4"
        style="background-color:rgba(30, 30, 30, 0.801)">
        <div class="mt-20 relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">

            <!-- Modal header -->
            <div class="flex justify-between items-center bg-green-500 text-white text-xl rounded-t-md px-4 py-2">
                <h3>Info</h3>
                <button onclick="closeModal('modal')">x</button>
            </div>

            <!-- Modal body -->
            <div class="max-h-48 overflow-y-scroll p-4">
                <p class="text-sm text-gray-800" id="message"></p>

            </div>

            <!-- Modal footer -->
            <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center space-x-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition"
                    onclick="closeModal('modal')">Close</button>
            </div>
        </div>
    </div>
    {{-- Modal Delete --}}
    <div id="modal_delete" class="modal fixed inset-0 z-50 hidden h-screen w-full px-4" wire:ignore.self
        style="background-color:rgba(30, 30, 30, 0.801)">
        <div class="mt-20 relative top-40 mx-auto max-w-md rounded-md bg-white shadow-lg">

            <div class="max-h-48 p-4">
                <p>Are you sure to delete this product group?</p>
            </div>
            <!-- Modal footer border-t border-t-gray-500-->
            <div class="flex items-center justify-end space-x-4 gap-2 px-4 py-2">
                <button
                    class="rounded-md bg-gray-300 px-4 py-2 text-black hover:text-white transition hover:bg-gray-700"
                    onclick="closeModal('modal_delete')">CANCEL</button>
                {{-- <button class="rounded-md bg-blue-500 px-4 py-2 text-white transition hover:bg-blue-700"
                        onclick="test()">YES</button> --}}
                <button class="rounded-md bg-blue-500 px-4 py-2 text-white transition hover:bg-blue-700"
                    wire:click="delete()">YES</button>
            </div>
        </div>
    </div>
    @section('js')
        <script type="text/javascript">
            window.addEventListener('showModal', event => {
                console.log('here');
                var msg = event.detail.message;
                document.getElementById('message').innerHTML = msg;
                closeModal('modal_delete')
                openModal('modal');
            })

            window.addEventListener('showDeleteModal', event => {
                console.log('here');
                openModal('modal_delete');
            })

            function openModal(modalId) {
                modal = document.getElementById(modalId)
                modal.classList.remove('hidden')
            }

            function closeModal(modalId) {
                modal = document.getElementById(modalId)
                modal.classList.add('hidden')
            }
        </script>
    @endsection


</div>
