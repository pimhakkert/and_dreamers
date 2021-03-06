<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dashboard - And Dreamers</title>

        <link rel="stylesheet" href="{{ mix('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ mix('css/tooltip.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            @yield('css')
        </style>

        <script src="{{ mix('js/app.js') }}" defer></script>
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
        @livewireStyles
        <style>
            @media only screen and (min-width: 1600px) {
                html {
                    font-size: 130%;
                }
            }
        </style>
    </head>
    <body class="overflow-x-hidden">
        @yield('content')

        @yield('js')

        @stack('modals')

        @livewireScripts
    </body>
</html>
