@include('partials/start')

@livewireStyles
@yield('css')
@include('partials/navbar')


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
    {{-- @role('Admin') --}}
    @include('partials/sidebar3')
    {{-- @endrole --}}
    @livewire('float-notification')
    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">

        <div class="container mt-1">
            <div class="row mt-1 justify-content-center">
                <div class="mt-1 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- General Report -->
                            {{-- @yield('content') --}}
                            {{ $slot }}
                            <!-- End General Report -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
</div>
<!-- end wrapper -->
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

<script type="text/javascript">
    function openModal(modalId) {
        modal = document.getElementById(modalId)
        modal.classList.remove('hidden')
    }

    function closeModal(modalId) {
        modal = document.getElementById(modalId)
        modal.classList.add('hidden')
    }

    window.addEventListener('showModal', event => {
        console.log('here');
        var msg = event.detail.message;
        document.getElementById('message').innerHTML = msg;
        // closeModal('modal_create_application')
        openModal('modal');
    })
</script>
@stack('modals')
@livewireScripts
@yield('js')
@include('partials.end')
