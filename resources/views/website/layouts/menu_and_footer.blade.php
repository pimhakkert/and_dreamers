<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - And Dreamers</title>

    <link rel="stylesheet" href="{{ mix('css/tooltip.css') }}">
    <link rel="stylesheet" href="{{ mix('css/tailwind.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @yield('css')
    <style>
        #desktop-menu-nav {
            transition-duration: 300ms;
        }

        #desktop-menu-nav.menu-open {
            opacity: 1 !important;
        }
    </style>

    <script src="{{ mix('js/app.js') }}" defer></script>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    @livewireStyles
</head>
<body style="overflow-x: hidden; height: 100vh;" class="flex flex-col">
<nav class="fixed top-0 left-0 bg-brown  h-full w-16" style="z-index: 100; box-shadow: 6px 0px 6px 0px rgba(0,0,0,0.2);">
    <div class="relative flex flex-col justify-evenly items-center h-full">
        <a href="{{ route('hatoverview') }}" class="transform -rotate-90 whitespace-nowrap text-white font-bold text-lg">{{ __('pages/general.nav_hat_stories') }}</a>
        <div id="desktop-menu" class="w-full">
            <div class="cursor-pointer w-full flex flex-col items-center">
                <div class="rounded-full w-2 h-2 bg-white mb-1"></div>
                <div class="rounded-full w-2 h-2 bg-white mb-1"></div>
                <div class="rounded-full w-2 h-2 bg-white"></div>
            </div>
        </div>
        <div id="desktop-menu-nav" class="absolute pl-36 px-32 py-52" style="opacity: 0; left: 100%; top: 50%; transform: translateY(-50%); background-color: rgba(241,241,241,0.9); display: none;">
            <a class="mb-5 block text-brown text-lg font-bold whitespace-nowrap" href="{{ route('home') }}">{{ __('pages/general.nav_home') }}</a>
            <a class="mb-5 block text-brown text-lg font-bold whitespace-nowrap" href="{{ route('hatoverview') }}">{{ __('pages/general.nav_hat_stories') }}</a>
            <a class="mb-5 block text-brown text-lg font-bold whitespace-nowrap" href="{{ route('about') }}">{{ __('pages/general.nav_about') }}</a>
            <a class="mb-5 block text-brown text-lg font-bold whitespace-nowrap" href="{{ route('contact') }}">{{ __('pages/general.nav_contact') }}</a>
            <a class="mb-5 block text-brown text-lg font-bold whitespace-nowrap" href="">{{ __('pages/general.nav_privacy_policy') }}</a>
        </div>
        <a href="{{ route('contact') }}" class="transform -rotate-90 text-white font-bold text-lg">{{ __('pages/general.nav_contact') }}</a>
    </div>
</nav>

<section class="fixed top-10 right-10" style="z-index: 999;">
    <div class="flex items-center">
        <div class="mr-14">
            <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="text-brown border-brown @if(App::isLocale('en')) border-b-4 @endif">EN</a>
            <span class="mx-2 text-brown">|</span>
            <a href="{{ LaravelLocalization::getLocalizedURL('nl', null, [], true) }}" class="text-brown border-brown @if(App::isLocale('nl')) border-b-4 @endif">NL</a>
        </div>
        <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-brown text-center flex items-center justify-center hover:bg-lightbrown hatMenu" href="{{ route('hatoverview') }}">
            <img src="../images/hoed-wit.svg" alt="Hat stories" class="menuTwo-image md:w-12 md:h-12 w-10 h-10">
        </a>
    </div>
</section>

<main style="@if(Route::current()->getName() != 'contact') flex: 1 0 auto; @endif">
    @yield('content')
</main>

<footer class="@if(Route::current()->getName() != 'contact') flex-shrink-0 @else h-full flex flex-col @endif">
    @if(Route::current()->getName() != 'contact')
    <a href="{{ route('contact') }}">
    @endif
        <div class="bg-lightbrown py-28 px-40 pl-72 flex justify-between  @if(Route::current()->getName() == 'contact') h-full flex-col pt-40 pb-16 @else items-center @endif">
            <div class="max-w-2xl @if(Route::current()->getName() == 'contact') -ml-24 @endif">
                <h4 class="font-bold text-7xl" style="color: rgba(255,255,255,0.48)">CONTACT</h4>
                <h5 class="text-4xl italic text-brown -mt-12 ml-20">"{{ __('pages/general.footer_contact') }}"</h5>
            </div>
            @if(Route::current()->getName() != 'contact')
            <img class="w-44" src="{{ asset('images/next.svg') }}" alt="Contact page">
            @else
            <div class="flex">
                <form class="w-1/4 mr-32" method="POST" action="{{ route('contactSend') }}">
                    @csrf
                    <h3 class="text-brown text-3xl font-semibold -mb-10">{{ __('pages/general.contact_title') }}</h3>
                    <div class="form-group -mb-10">
                        @if ($errors->has('name'))
                            <div class="text-red">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <input type="text" placeholder="{{ __('pages/general.contact_field_name') }}" name="name" style="border-bottom-width: 3px;">
                    </div>
                    <div class="form-group -mb-10">
                        @if ($errors->has('phone_number'))
                            <div class="text-red">
                                {{ $errors->first('phone_number') }}
                            </div>
                        @endif
                        <input type="text" placeholder="{{ __('pages/general.contact_field_phone') }}" name="phone_number" style="border-bottom-width: 3px;">
                    </div>
                    <div class="form-group">
                        @if ($errors->has('message'))
                            <div class="text-red">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                        <textarea name="message" placeholder="{{ __('pages/general.contact_field_message') }}" style="border-bottom-width: 3px; height: 130px;"></textarea>
                    </div>
                    <button class="border-4 border-brown leading-none text-brown w-full mt-12 p-3 lg:p-3 2xl:p-3 pb-2 lg:pb-2 2xl:pb-2 font-semibold hover:bg-brown hover:text-white">{{ __('pages/general.contact_button') }}</button>
                    <!-- Success message -->
                    @if(Session::has('success'))
                        <p class="text-green-light mt-2">{{ __('pages/contact.success') }}</p>
                    @endif

                    @if(Session::has('fail'))
                        <p class="text-red mt-2">{{ __('pages/contact.fail') }}</p>
                    @endif
                </form>
                <div>
                    <h3 class="text-brown text-3xl font-semibold">{{ __('pages/general.contact_end') }}</h3>
                    <p class="mt-7 text-brown-light">Andrea Mengelberg</p>
                    <p class="mt-5 -mb-1 text-brown-light">+31 6 149 285 01</p>
                    <a class="text-brown-light" href="mailto:info@and-dreamers.com?subject=I%20would%20like%20to%20get%20in%20touch">info@and-dreamers.com</a>
                </div>
            </div>
            @endif
        </div>
    @if(Route::current()->getName() != 'contact')
    </a>
    @endif


    <div class="flex justify-center p-8 pb-7" style="background-color: #C5B9AF;">
        <p class="text-white font-light text-lg">{{ __('pages/general.footer_rights') }} 2021</p>
        <span class="text-white font-light mx-5 text-lg">|</span>
        <p class="text-white font-light text-lg">{{ __('pages/general.footer_made_by') }}</p>
    </div>
</footer>
@yield('js')
@stack('modals')
@livewireScripts
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    window.addEventListener('load', () => {

        const menu = document.querySelector('#desktop-menu');
        const menuNav = document.querySelector('#desktop-menu-nav');

        menu.addEventListener('click', (event) => {

            if(menuNav.classList.contains('menu-open'))
            {
                menuNav.classList.remove('menu-open');
                window.setTimeout(() => {
                    menuNav.style.display = 'none';
                }, 300);
            }
            else
            {
                menuNav.style.display = 'block';
                menuNav.classList.add('menu-open');
            }
        });
    });

    $(document).ready(function(){
        $('.hatMenu').hover(
            function(){$(this).children('.menuTwo-image').attr('src', '../images/hoed.svg')},
            function(){$(this).children('.menuTwo-image').attr('src', '../images/hoed-wit.svg')}
        );
    });
</script>
</body>
</html>
