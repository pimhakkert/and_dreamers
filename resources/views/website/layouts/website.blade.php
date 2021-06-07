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
<body style="overflow-x: hidden;">

<!-- Left Menu -->
<div class="text-brown md:pl-10 md:fixed h-full grid md:w-auto w-full z-50" style="grid-template-columns: auto">
    <!-- Top Left Menu -->
    <div class="pl-10 md:pl-0 z-50 md:pb-0 pb-10">
    </div>

    <!-- Bottom Left Menu -->
    <div class="flex md:flex-col flex-row md:justify-end md:items-start md:mb-20 md:static justify-center items-end md:pb-0 z-50 fixed bottom-0 w-full md:w-auto md:pt-0 pt-6 md:bg-transparent bg-white">
        <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuOne" href="/">
            <img src="{{ URL::asset('images/home.svg') }}" alt="Home" class="mb-2 ml-0.5 menuOne-image md:w-12 md:h-12 w-10 h-10">
            <span class="tooltiptext hidden md:block">Go to our homepage!</span>
        </a>
        <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-brown text-center flex items-center justify-center mb-5 hover:bg-lightbrown tooltipHome menuTwo" href="/hats">
            <img src="{{ URL::asset('images/hoed-wit.svg') }}" alt="All hats" class="menuTwo-image md:w-12 md:h-12 w-10 h-10">
            <span class="tooltiptext hidden md:block">View all of our hats!</span>
        </a>
        <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuThree" href="/contact">
            <img src="{{ URL::asset('images/mail.svg') }}" alt="Contact" class="mt-1 mb-2 menuThree-image md:w-12 md:h-12 w-10 h-10">
            <span class="tooltiptext hidden md:block">Contact us!</span>
        </a>
        <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuThree" href="/">
            <img src="{{ URL::asset('images/insta.svg') }}" alt="Instagram" class="mt-1 mb-2 menuFour-image md:w-12 md:h-12 w-10 h-10">
            <span class="tooltiptext hidden md:block">View our Instagram!</span>
        </a>
    </div>
</div>

@yield('content')

@yield('js')
<script>
    $(document).ready(function(){
        $('.menuOne').hover(
            function(){$(this).children('.menuOne-image').attr('src', '{{ URL::asset('images/home-wit.svg') }}')},
            function(){$(this).children('.menuOne-image').attr('src', '{{ URL::asset('images/home.svg') }}')}
        );
        $('.menuTwo').hover(
            function(){$(this).children('.menuTwo-image').attr('src', '{{ URL::asset('images/hoed.svg') }}')},
            function(){$(this).children('.menuTwo-image').attr('src', '{{ URL::asset('images/hoed-wit.svg') }}')}
        );
        $('.menuThree').hover(
            function(){$(this).children('.menuThree-image').attr('src', '{{ URL::asset('images/mail-wit.svg') }}')},
            function(){$(this).children('.menuThree-image').attr('src', '{{ URL::asset('images/mail.svg') }}')}
        );
        $('.menuFour').hover(
            function(){$(this).children('.menuFour-image').attr('src', '{{ URL::asset('images/insta-wit.svg') }}')},
            function(){$(this).children('.menuFour-image').attr('src', '{{ URL::asset('images/insta.svg') }}')}
        );
    });
</script>
@stack('modals')
@livewireScripts
</body>
</html>
