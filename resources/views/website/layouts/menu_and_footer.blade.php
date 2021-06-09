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

        @media (min-width: 768px) {
            .navMenu {
                left: 100%;
                top: 50%;
                transform: translateY(-50%);
            }
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
<nav class="fixed bottom-0 md:top-0 md:left-0 bg-brown w-full h-18 md:w-18 md:h-full" style="z-index: 100; box-shadow: 6px 0px 6px 0px rgba(0,0,0,0.2);">
    <div class="relative flex md:flex-col justify-evenly items-center h-full">
        <a href="{{ route('hatoverview') }}" class="transform md:-rotate-90 whitespace-nowrap text-white md:font-bold text-base md:text-lg">{{ __('pages/general.nav_hat_stories') }}</a>
        <div id="desktop-menu" class="md:w-full">
            <div class="cursor-pointer w-full flex flex-col transform rotate-90 md:rotate-0 items-center">
                <div class="rounded-full w-2 h-2 bg-white mb-1"></div>
                <div class="rounded-full w-2 h-2 bg-white mb-1"></div>
                <div class="rounded-full w-2 h-2 bg-white"></div>
            </div>
        </div>
        <div id="desktop-menu-nav" class="navMenu absolute mb-96 md:mb-0 px-20 py-10 md:pl-36 md:px-32 md:py-52 text-center" style="opacity: 0; background-color: rgba(241,241,241,0.9); display: none;">
            <a class="mb-5 block text-brown text-lg md:font-bold whitespace-nowrap" href="{{ route('home') }}">{{ __('pages/general.nav_home') }}</a>
            <a class="mb-5 block text-brown text-lg md:font-bold whitespace-nowrap" href="{{ route('hatoverview') }}">{{ __('pages/general.nav_hat_stories') }}</a>
            <a class="mb-5 block text-brown text-lg md:font-bold whitespace-nowrap" href="{{ route('about') }}">{{ __('pages/general.nav_about') }}</a>
            <a class="mb-5 block text-brown text-lg md:font-bold whitespace-nowrap" href="{{ route('contact') }}">{{ __('pages/general.nav_contact') }}</a>
            <a class="mb-5 block text-brown text-lg md:font-bold whitespace-nowrap" href="">{{ __('pages/general.nav_privacy_policy') }}</a>
        </div>
        <a href="{{ route('contact') }}" class="transform md:-rotate-90 text-white md:font-bold text-base md:text-lg">{{ __('pages/general.nav_contact') }}</a>
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

<footer class="flex-shrink-0">
    @if(Route::current()->getName() != 'contact')
    <a href="{{ route('contact') }}">
        <div class="bg-lightbrown py-28 px-40 pl-72 flex justify-between items-center">
            <div class="max-w-2xl">
                <h4 class="font-bold text-7xl" style="color: rgba(255,255,255,0.48)">CONTACT</h4>
                <h5 class="text-4xl italic text-brown -mt-12 ml-20">"{{ __('pages/general.footer_contact') }}"</h5>
            </div>
            <img class="w-44" src="{{ asset('images/next.svg') }}" alt="Contact page">
        </div>
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
