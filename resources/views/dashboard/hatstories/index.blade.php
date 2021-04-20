@extends('dashboard.layouts.dashboard-inside')

@section('content')

    <div class="grid grid-cols-3">
        @foreach ($hatstory as $hat)
            <div class="w-64 h-64">
                <div class="border-brown border-8 rounded-full bg-no-repeat bg-cover block w-64 h-64 mb-5" style="background-image: url(/storage/hatimage/{{ $hat->hat_cover_image }});"></div>
                <p class="text-center text-2xl"> {{ $hat->hat_cover_title }}</p>
            </div>
        @endforeach
    </div>
    <div class="absolute bottom-0">
        <a href="{{ route('hatstories.create') }}">Create</a>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
