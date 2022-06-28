<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="flex flex-row-reverse mb-4 text-sm">

        <a wire:click="" class="btn-shadow">{{ __('Create New User') }}</a>

    </div>
    {{-- <div id="div_message" class="alert alert-error alert-close {{$isHidden_message}}">
        <button class="alert-btn-close" onclick="function(){$('#div_message').fadeOut();}">
            <i class="fad fa-times"></i>
        </button>
        <span>{{$message}}</span>
    </div> --}}
    
    <div class="alert alert-error my-2 {{ $isHidden_message }}">
        {{ $message }}
        <button wire:click="closemessage()">
            <i class="fad fa-times"></i>
        </button>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col"
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        {{ __('User name') }}
                    </th>
                    <th scope="col"
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        {{ __('Email') }}
                    </th>
                    <th scope="col"
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Date Register
                    </th>
                    <th scope="col"
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stafs as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row"
                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $item->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->email }}
                        </td>
                        <td class="px-6 py-4">
                            <span class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                <span aria-hidden class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                <span class="relative">{{ $item->created_at }}</span>
                            </span>
                        </td>

                        <td class="px-6 py-4 text-right">
                            <a wire:click="openmodal_deleteuser({{ $item->id }})"
                                class="font-medium text-red-600 dark:text-red-500 hover:underline px-2">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- modal_reviewed_query -->
    <div id="modal_delete_user"
        class="fixed inset-0 z-50 {{ $isHidden }} h-full w-full overflow-y-auto bg-gray-200 bg-opacity-10 px-4"
        style="background-color:rgba(30, 30, 30, 0.801)">
        <div class="mt-20 relative top-40 mx-auto max-w-md rounded-md bg-white shadow-lg">

            <div class="max-h-screen p-4 ">
                <p>You are about to delete this user. </p>
                <p>{{ $user_to_delete }}</p>
                <p>you sure you want to
                    proceed?</p>
            </div>
            <!-- Modal footer border-t border-t-gray-500-->
            <div class="flex items-center justify-end space-x-4 gap-2 px-4 py-2">
                <button class="rounded-md bg-gray-300 px-4 py-2 text-blue transition hover:bg-blue-700"
                    wire:click="closemodal_deleteuser">CANCEL</button>
                <button class="rounded-md bg-blue-500 px-4 py-2 text-white transition hover:bg-blue-700"
                    wire:click="deleteUser({{ $item->id }})">YES</button>
            </div>
        </div>
    </div>
    <!-- modal_reviewed_query -->

    <script>
        // window.addEventListener('showModal', event => {
        //     var modalId = event.detail.modal;
        //     modal = document.getElementById(modalId);
        //     modal.classList.remove('hidden');

        // })
    </script>
</div>
