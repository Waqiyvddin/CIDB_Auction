@include('partials/start2')

@livewireStyles
@yield('css')
@include('partials/navbar2')


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    @include('partials/sidebar2')
    @livewire('float-notification')
    <!-- strat content -->
    <div class="container">
    <section class="section main-section">
                    <div class="card">
                        <div class="card-content">
                            <!-- General Report -->
                            @yield('content')
                            {{ $slot }}
                            <!-- End General Report -->
                        </div>
                    </div>
    </section>
    </div>
    <!-- end content -->
</div>
<!-- end wrapper -->
@stack('modals')
@livewireScripts
@yield('js')
@include('partials.end2')
