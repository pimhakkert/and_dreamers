@extends('dashboard.layouts.dashboard-inside')

@section('content')

    <div class="grid lg:grid-cols-3 lg:gap-x-8 gap-y-28 md:grid-cols-2 grid-cols-1">
        @foreach ($hatstory as $hat)
            <div class="w-64 h-64">
                <div class="border-brown border-8 rounded-full bg-no-repeat bg-cover bg-center block w-64 h-64 mb-5" style="background-image: url(/storage/hatimage/{{ $hat->hat_cover_image }});"></div>
                <p class="text-center text-2xl"> {{ $hat->hat_cover_title }}</p>
                <a href="{{ route('hatstories.edit', $hat->hat_id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                <form class="inline-block" action="{{ route('hatstories.destroy', $hat->hat_id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                </form>
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
