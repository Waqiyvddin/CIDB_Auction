@include('partials/start')

@livewireStyles
@yield('css')
@include('partials/navbar')


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    @include('partials/sidebar')
    @livewire('float-notification')
    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">

        <div class="container mt-1">
            <div class="row mt-1 justify-content-center">
                <div class="mt-1 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- General Report -->
                            @yield('content')
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
@stack('modals')
@livewireScripts
@yield('js')
@include('partials.end')
