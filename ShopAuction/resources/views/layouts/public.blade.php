@include('partials/start')

@livewireStyles
@yield('css')

<div class="mx-20 my-20 px-20">
    <div class="card">
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</div>
@stack('modals')
@livewireScripts
@yield('js')
@include('partials.end')
