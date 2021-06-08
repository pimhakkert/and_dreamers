@extends('website.layouts.website')

@section('title', 'Hat Stories')

@section('content')
    <div class="overflow-x-hidden">
        <!-- Background Images -->
        <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}" alt="Background Image">

        <!-- Content Grid -->
            <div class="container" style="width: 100vw; height: 800px;">
                <div class="canvas absolute left-0 top-0 h-auto p-72" style="transform: translate(-50vw, -50vw); width: 200%; transition: 1.5s ease-out;">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                    @foreach ($hatStory as $hat)
                            <a class="relative layer flex flex-col align-middle m-8 justify-self-center" data-speed="2" href="/hatstory/{{ $hat->hat_id }}" style="width: 250px;">
                                <img src="{{ URL::asset('images/book_front.png') }}" alt="Front of the book" style="">
                                <p class="text-2xl italic absolute w-full text-center top-10">{{ $hat->hat_name }}</p>
                                <p class="font-thin absolute w-full text-center top-20">and.dreamers</p>
                                <p class="italic absolute w-full text-center bottom-10">{{ __('pages/hatstories.catch_phrase') }}</p>
                                <div class="absolute hatStory-circle rounded-full bg-no-repeat bg-cover bg-center block w-32 h-32" style="left: 50%; top: 55%; transform: translate(-50%, -45%); background-image: url(../storage/hatimage/{{ $hat->hat_image }});"></div>
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

    function NotForMobileDevicese(){
        if(window.innerWidth < 1200){
            document.querySelector("html").style.overflow = "visible";
            document.querySelector("body").style.overflow = "visible";
            document.querySelector(".canvas").style.padding = "0";
            document.querySelector(".canvas").style.paddingTop = "30px";
            document.querySelector(".canvas").style.paddingBottom = "100px";
            document.querySelector(".canvas").style.transform = "translate(0,0)";
            document.querySelector(".canvas").style.width = "100%";
            document.querySelector(".canvas").style.transition = "";
            Array.from(document.querySelectorAll(".layer"))
                .forEach(function(all) {
                    all.style.marginRight = "0";
                    all.style.marginLeft = "0";
                });
            return
        }
        window.addEventListener('mousemove', (e) => {

            let x = e.clientX - container.getBoundingClientRect().left;
            let y = e.clientY - container.getBoundingClientRect().top;

            canvas.style.transform = `translate(-${x}px, -${y * 2}px)`;
        });
    }

    NotForMobileDevicese();
</script>
@endsection
