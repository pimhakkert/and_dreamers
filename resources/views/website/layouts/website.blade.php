<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - And Dreamers</title>

    <link rel="stylesheet" href="{{ mix('css/tailwind.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @yield('css')

    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
</head>
<body style="overflow-x: hidden;">

@yield('content')

@yield('js')
@stack('modals')
@livewireScripts
</body>
</html>
