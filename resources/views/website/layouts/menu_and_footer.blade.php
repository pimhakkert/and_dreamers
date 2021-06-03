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
    @yield('css')
    <style>
        #desktop-menu-nav {
            transition-duration: 1s;
        }

        #desktop-menu.menu-open #desktop-menu-nav {
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
<nav class="fixed top-0 left-0 bg-brown  h-full z-50 w-16" style="box-shadow: 6px 0px 6px 0px rgba(0,0,0,0.2);">
    <div class="relative flex flex-col justify-evenly items-center h-full">
        <a href="{{ route('hatoverview') }}" class="transform -rotate-90 whitespace-nowrap text-white font-bold text-lg">Hat stories</a>
        <div id="desktop-menu" class="w-full">
            <div class="cursor-pointer w-full flex flex-col items-center">
                <div class="rounded-full w-2 h-2 bg-white mb-1"></div>
                <div class="rounded-full w-2 h-2 bg-white mb-1"></div>
                <div class="rounded-full w-2 h-2 bg-white"></div>
            </div>
            <div id="desktop-menu-nav" class="absolute pl-36 px-32 py-52" style="opacity: 0; left: 100%; top: 50%; transform: translateY(-50%); background-color: rgba(241,241,241,0.6)">
                <a class="mb-5 block text-brown text-lg font-bold whitespace-nowrap" href="{{ route('home') }}">Home</a>
                <a class="mb-5 block text-brown text-lg font-bold whitespace-nowrap" href="{{ route('hatoverview') }}">Hat stories</a>
                <a class="mb-5 block text-brown text-lg font-bold whitespace-nowrap" href="">About</a>
                <a class="mb-5 block text-brown text-lg font-bold whitespace-nowrap" href="{{ route('contact') }}">Contact</a>
                <a class="mb-5 block text-brown text-lg font-bold whitespace-nowrap" href="">Privacy policy</a>
            </div>
        </div>
        <a href="{{ route('contact') }}" class="transform -rotate-90 text-white font-bold text-lg">Contact</a>
    </div>

</nav>
<section class="fixed top-10 right-10">
    <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-brown text-center flex items-center justify-center mb-5 hover:bg-lightbrown hatMenu" href="/hats">
        <img src="../images/hoed-wit.svg" alt="Hat stories" class="menuTwo-image md:w-12 md:h-12 w-10 h-10">
    </a>
</section>
<main style="flex: 1 0 auto;">
    @yield('content')
</main>

<footer class="flex-shrink-0">
    <a href="{{ route('contact') }}">
        <div class="bg-lightbrown py-28 px-40 pl-72 flex justify-between items-center">
            <div class="max-w-2xl">
                <h4 class="font-bold text-7xl" style="color: rgba(255,255,255,0.48)">CONTACT</h4>
                <h5 class="text-4xl italic text-brown -mt-12 ml-20">"I would like to get in contact to talk about your hats"</h5>
            </div>
            <img class="w-44" src="{{ asset('images/next.svg') }}" alt="Link naar de contact pagina">
        </div>
    </a>
    <div class="flex justify-center p-8 pb-7" style="background-color: #C5B9AF;">
        <p class="text-white font-light">All rights reserved 2021</p>
        <span class="text-white font-light mx-5">|</span>
        <p class="text-white font-light">A website by Loudmouth</p>
    </div>
</footer>
@yield('js')
@stack('modals')
@livewireScripts
<script>
    window.addEventListener('load', () => {

        const menu = document.querySelector('#desktop-menu');

        menu.addEventListener('click', () => {
            if(menu.classList.contains('menu-open'))
            {
                menu.classList.remove('menu-open');
            }
            else
            {
                menu.classList.add('menu-open');
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
