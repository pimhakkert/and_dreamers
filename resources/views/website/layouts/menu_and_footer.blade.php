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

    <script src="{{ mix('js/app.js') }}" defer></script>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    @livewireStyles
</head>
<body style="overflow-x: hidden; height: 100vh;" class="flex flex-col">
<div style="flex: 1 0 auto;">
    @yield('content')
</div>


@yield('js')
@stack('modals')
@livewireScripts
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
</body>
</html>
