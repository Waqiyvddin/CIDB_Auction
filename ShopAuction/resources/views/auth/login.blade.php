@include('partials/start')
@livewireStyles
@yield('css')

<div class="min-w-screen flex min-h-screen items-center justify-center bg-white px-5 py-5">
    <div class="grid grid-cols-2">

        <div class="col-span-1 w-2/3 ml-32 mt-20 mb-10 bg-gray-100 text-gray-500 shadow-xl rounded-sm">
            <div class="w-full md:flex">
                <div class="w-full py-2 px-5 md:w-1/2 md:px-10">
                    <!-- stock no div -->
                    <div class="flex flex-col md:justify-start justify-center p-4 sm:flex-row">
                        <div class="flex h-auto flex-col gap-3 rounded-xl sm:w-36">
                            <div class="h-11 w-full mt-2 rounded-xl flex align-middle justify-center">
                                <img src="{{ asset('img/logo_cidb.png') }}" class="w-40 flex-none">
                            </div>
                        </div>
                    </div>

                    <!-- stock no div -->
                    <div class="pb-4 pl-1">
                        <h1 class="text-2xl font-bold text-gray-600">Login</h1>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="-mx-3 flex">
                                <div class="mb-5 w-full px-3">
                                    <label for="" class="px-1 text-xs font-semibold">Email</label>
                                    <div class="flex">
                                        <div
                                            class="pointer-events-none z-10 flex w-10 items-center justify-center pl-1 text-center">
                                            <i class="mdi mdi-email-outline text-lg text-gray-400"></i>
                                        </div>
                                        <input type="email" id="email" name="email" :value="old('email')"
                                            required autofocus
                                            class="-ml-10 w-full rounded-lg border-2 border-gray-200 py-2 pl-10 pr-3 outline-none focus:border-indigo-500"
                                            placeholder="user@gmail.com" />
                                    </div>
                                </div>
                            </div>
                            <div class="-mx-3 flex">
                                <div class="mb-6 w-full px-3">
                                    <label for="" class="px-1 text-xs font-semibold">Password</label>
                                    <div class="flex">
                                        <div
                                            class="pointer-events-none z-10 flex w-10 items-center justify-center pl-1 text-center">
                                            <i class="mdi mdi-lock-outline text-lg text-gray-400"></i>
                                        </div>
                                        <input type="password" id="password" name="password" required
                                            class="-ml-10 w-full rounded-lg border-2 border-gray-200 py-2 pl-10 pr-3 outline-none focus:border-indigo-500"
                                            placeholder="6+ Character, 1 capital Letter" />
                                    </div>
                                </div>
                            </div>
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="-mx-3 flex">
                                <div class="mb-5 w-full px-3">
                                    <button type="submit"
                                        class="h-12 block w-full rounded-lg bg-teal-700 px-3 py-3 font-semibold text-white hover:bg-teal-500 focus:bg-teal-500">{{ __('Log in') }}</button>
                                </div>
                            </div>
                        </form>
                        <div class="grid grid-cols-2">
                            <p class="col-span-1 text-left">Don't have account? <a href="{{ route('register') }}"
                                    class="text-teal-500">Register</a>
                            </p>
                            <p class="col-span-1 text-right">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </p>
                        </div>

                    </div>

                </div>

                <div class="hidden w-1/2 bg-teal-700 py-10 px-10 md:block">
                    <svg id="a87032b8-5b37-4b7e-a4d9-4dbfbe394641" data-name="Layer 1"
                        xmlns="http://www.w3.org/2000/svg" width="100%" height="auto"
                        viewBox="0 0 744.84799 747.07702"></svg>
                </div>
            </div>
        </div>
        <div class="col-span-1 px-6"><img src="{{ asset('img/login_img.png') }}" alt=""></div>
    </div>
</div>
@livewireScripts
@yield('js')
@include('partials.end')
