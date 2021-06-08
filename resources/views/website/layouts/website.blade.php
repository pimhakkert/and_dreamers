<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Hat stories from a one-time millinery apprentice who came back to a forgotten dream.">

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

<div class="fixed w-full flex items-center md:justify-end" style="z-index: 999;">
    <div class="pt-10 px-10">
        <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="text-brown border-brown @if(App::isLocale('en')) border-b-4 @endif">EN</a>
        <span class="mx-2 text-brown">|</span>
        <a href="{{ LaravelLocalization::getLocalizedURL('nl', null, [], true) }}" class="text-brown border-brown @if(App::isLocale('nl')) border-b-4 @endif">NL</a>
    </div>
</div>

<!-- Left Menu -->
<div class="text-brown md:pl-10 md:fixed md:h-full grid md:w-auto w-full z-50" style="grid-template-columns: auto">
    <!-- Bottom Left Menu -->
    <div class="flex md:flex-col flex-row md:justify-end md:items-start md:mb-20 md:static justify-center items-end md:pb-0 z-50 fixed bottom-0 w-full md:w-auto md:pt-0 pt-6 md:bg-transparent bg-white">
        <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuOne" href="/">
            <img src="{{ URL::asset('images/home.svg') }}" alt="Home" class="mb-2 ml-0.5 menuOne-image md:w-12 md:h-12 w-10 h-10">
            <span class="tooltiptext hidden md:block">{{ __('pages/general.nav_tooltip_homepage') }}</span>
        </a>
        <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-brown text-center flex items-center justify-center mb-5 hover:bg-lightbrown tooltipHome menuTwo" href="/hats">
            <img src="{{ URL::asset('images/hoed-wit.svg') }}" alt="All hats" class="menuTwo-image md:w-12 md:h-12 w-10 h-10">
            <span class="tooltiptext hidden md:block">{{ __('pages/general.nav_tooltip_hats') }}</span>
        </a>
        <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuThree" href="/contact">
            <img src="{{ URL::asset('images/mail.svg') }}" alt="Contact" class="mt-1 mb-2 menuThree-image md:w-12 md:h-12 w-10 h-10">
            <span class="tooltiptext hidden md:block">{{ __('pages/general.nav_tooltip_contact') }}</span>
        </a>
        <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuThree" href="/">
            <img src="{{ URL::asset('images/insta.svg') }}" alt="Instagram" class="mt-1 mb-2 menuFour-image md:w-12 md:h-12 w-10 h-10">
            <span class="tooltiptext hidden md:block">{{ __('pages/general.nav_tooltip_instagram') }}</span>
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
