@extends('website.layouts.website')

@section('title', 'Hat Stories')

@section('content')
    <div class="overflow-x-hidden">
        <!-- Background Images -->
        <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}" alt="Background Image">
        <img class="absolute lg:w-big w-small hidden xl:block" src="{{ URL::asset('images/rechthoek.svg') }}" alt="Background Image" style="margin-top: 100px;">

        <!-- Content Grid -->
            <div class="container absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%); width: 100vw; height: 800px;">
                <div class="canvas absolute left-0 top-0 h-auto flex p-72" style="transform: translate(-50vw, -50vw); width: 200%; transition: 1.5s ease-out;">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                    @foreach ($hatStory as $hat)
                            <a class="relative layer p-8" data-speed="2" href="/hatstory/{{ $hat->hat_id }}">
                                <img src="{{ URL::asset('images/book_front.png') }}" alt="Front of the book">
                                <p class="text-2xl italic absolute w-full text-center" style="left: 50%; top: 15%; transform: translate(-50%, 0%);">{{ $hat->hat_name }}</p>
                                <p class="font-thin absolute" style="left: 50%; top: 22%; transform: translate(-50%, 0%);">and.dreamers</p>
                                <p class="italic absolute w-full text-center" style="left: 50%; top: 75%; transform: translate(-50%, -50%);">{{ __('pages/hatstories.catch_phrase') }}</p>
                                <div class="absolute hatStory-circle rounded-full bg-no-repeat bg-cover bg-center block w-32 h-32 top-0 left-0" style="background-image: url(../storage/hatimage/{{ $hat->hat_image }}); left: 50%; top: 45%; transform: translate(-50%, -45%);"></div>
                            </a>
                            <div class="hidden sm:block p-2"></div>
                            <div class="hidden sm:block md:hidden p-2"></div>
                    @endforeach
                    </div>
                </div>
            </div>
    </div>
@endsection

@section('css')

    <style>
    body, html {
        overflow: hidden;
        width: 100%;
        height: 100vh;
    }
    </style>

@endsection

@section('js')
<script>
    let container = document.querySelector('.container');
    let canvas = document.querySelector('.canvas');

    function exampleNotForMobileDevicese(){
        if(window.innerwidth < 1200){
            return
        }
        window.addEventListener('mousemove', (e) => {

            let x = e.clientX - container.getBoundingClientRect().left;
            let y = e.clientY - container.getBoundingClientRect().top;

            canvas.style.transform = `translate(-${x}px, -${y * 2}px)`;
        });
    }

    exampleNotForMobileDevicese();
</script>
@endsection
