@extends('website.layouts.menu_and_footer')

@section('title', 'Home')

@section('content')
    <!-- Background images -->
{{--    <img class="absolute -ml-44 mt-circle" src="{{ URL::asset('images/cirkel.svg') }}" alt="">--}}

    <!-- Header -->
    <div class="headerMain flex justify-center items-center bg-mainbg" style="height: 100vh; box-shadow: 0 3px 6px #00000029; background-image: url({{ URL::asset('images/background.jpg') }}); background-repeat: no-repeat; background-position: center; background-size: cover;">
        <div class="addText">
            <div class="bg-lightbrown rounded-full z-50 w-60 sm:w-80 md:w-96 removeImage" style="animation: backInDown; animation-duration: 2s;">
                <img src="{{ URL::asset('images/logo.svg') }}" alt="and.dreamers Logo">
            </div>
        </div>
        <div class="hidden text z-40 px-12 md:px-20 xl:px-40 2xl:px-60">
            <p class="text-base md:text-xl pb-5 text-black">{{ __('pages/home.welcome') }}</p>
            <h1 class="text-4.5xl sm:text-6xl lg:text-7xl xl:text-8xl 2xl:text-10xl italic text-brown">and.dreamers</h1>
        </div>
        <div class="hidden textTwo z-50 px-12 md:px-20 xl:px-40 2xl:px-60">
            <p class="text-3xl lg:text-4xl xl:text-5xl text-brown italic">{{ __('pages/home.intro1') }}</p>
            <p class="text-xs md:text-base lg:text-xl pt-10 text-black">{{ __('pages/home.intro2') }}</p>
        </div>
    </div>

    <!-- Circularity Text -->
    <div class="pt-28 pb-20 z-40 relative text-right px-12 md:px-20 xl:px-40 2xl:px-60">
        <div>
            <h2 class="text-2xl md:text-4xl italic text-brown pb-1">{{ __('pages/home.circularity1') }}</h2>
            <p class="text-brown text-sm ">{{ __('pages/home.circularity2') }}</p>
        </div>
    </div>

    <!-- Text Sections -->
    <div class="flex flex-col items-center text-center px-12 md:px-20 xl:px-40 2xl:px-60">
        <!-- First Text Section -->
       <div data-aos="fade-right" class="pb-10 flex flex-col items-center relative pb-20 md:pb-30 lg:pb-40 lg:w-1/2">
           <img class="absolute w-20 h-20 lg:w-32 lg:h-32 -top-8 lg:-top-14 -ml-32" src="{{ URL::asset('images/solid_cirkel.svg') }}" alt="Solid Circle">
           <div class="relative">
               <p class="text-brown text-xl font-bold">{{ __('pages/home.buy_a_hat1') }}</p>
               <p class="text-brown md:mx-20 mx-0 lg:mx-0">{{ __('pages/home.buy_a_hat2') }}.</p>
           </div>
       </div>

        <!-- Second Text Section -->
        <div data-aos="fade-right" class="pb-10 flex flex-col items-center relative pb-20 md:pb-30 lg:pb-40 lg:w-1/2 lg:ml-40">
            <img class="absolute w-20 h-20 lg:w-32 lg:h-32 -top-8 lg:-top-14 -ml-32" src="{{ URL::asset('images/solid_cirkel.svg') }}" alt="Solid Circle">
            <div class="relative">
                <p class="text-brown text-xl font-bold">{{ __('pages/home.lease_a_hat1') }}</p>
                <p class="text-brown md:mx-20 mx-0 lg:mx-0">{{ __('pages/home.lease_a_hat2') }}</p>
            </div>
        </div>

        <!-- Third Text Section -->
        <div data-aos="fade-right"  class="pb-10 flex flex-col items-center relative pb-20 md:pb-30 lg:pb-40 lg:w-1/2 lg:ml-80">
            <img class="absolute w-20 h-20 lg:w-32 lg:h-32 -top-8 lg:-top-14 -ml-32" src="{{ URL::asset('images/solid_cirkel.svg') }}" alt="Solid Circle"> <!-- 160px -->
            <div class="relative">
                <p class="text-brown text-xl font-bold">{{ __('pages/home.rent_a_hat1') }}</p>
                <p class="text-brown md:mx-20 mx-0 lg:mx-0">{{ __('pages/home.rent_a_hat2') }}</p>
            </div>
        </div>
    </div>

    <!-- Bookshelf Text -->
    <div class="text-brown z-40 px-12 md:px-20 xl:px-40 2xl:px-60">
        <p class="text-2xl md:text-4xl italic">{{ __('pages/home.hat_story_shelf1') }}</p>
        <p class="text-xs md:text-sm pt-2">{{ __('pages/home.hat_story_shelf2') }}</p>
        <p class="text-xs md:text-sm pb-16">{{ __('pages/home.hat_story_shelf3') }}</p>
    </div>

    <!-- Books -->
    <div style="display:none">
        {{ $hats =  \App\Models\HatStory::orderBy('created_at', 'desc')->take(3)->get() }}
        {{ $middleHats = \App\Models\HatStory::orderBy('created_at', 'desc')->take(2)->get() }}
        {{ $smallHats =  \App\Models\HatStory::orderBy('created_at', 'desc')->take(1)->get()}}
    </div>
    <div class="xl:flex justify-between px-60 bookTurn hidden">
        @foreach($hats as $hat)
            <a class="relative hoverBook" href="/hatstory/{{ $hat->hat_id }}">
                <img src="{{ URL::asset('images/book_front.png') }}" alt="Front of the book" style="width: 220px; min-width: 220px;">
                <p class="text-xl italic absolute w-full text-center" style="top: 10%; transform: translateY(0%);">{{ $hat->hat_name }}</p>
                <p class="font-thin absolute w-full text-center" style="top: 20%; transform: translateY(0%);">and.dreamers</p>
                <p class="italic absolute w-full text-center" style="top: 88%; transform: translateY(-50%);">{{ __('pages/home.hat_story_shelf4') }}</p>
                <div class="absolute rounded-full bg-no-repeat bg-cover bg-center block w-32 h-32" style="background-image: url(../storage/hatimage/{{ $hat->hat_image }});top: 55%; left: 50%; transform: translate(-50%, -45%);"></div>
            </a>
        @endforeach
    </div>
    <div class="xl:hidden hidden block md:flex justify-between flex-wrap px-10 md:px-24 topBook">
        @foreach($middleHats as $middleHat)
            <a class="relative middleBook" href="/hatstory/{{ $middleHat->hat_id }}">
                <img src="{{ URL::asset('images/book_front.png') }}" alt="Front of the book" style="width: 220px; min-width: 220px;">
                <p class="text-xl italic absolute w-full text-center" style="top: 10%; transform: translateY(0%);">{{ $middleHat->hat_name }}</p>
                <p class="font-thin absolute w-full text-center" style="top: 20%; transform: translateY(0%);">and.dreamers</p>
                <p class="italic absolute w-full text-center" style="top: 88%; transform: translateY(-50%);">{{ __('pages/home.hat_story_shelf4') }}</p>
                <div class="absolute rounded-full bg-no-repeat bg-cover bg-center block w-32 h-32" style="background-image: url(../storage/hatimage/{{ $middleHat->hat_image }});top: 55%; left: 50%; transform: translate(-50%, -45%);"></div>
            </a>
        @endforeach
    </div>
    <div class="md:hidden block flex pl-16 md:pl-24 pb-10">
        @foreach($smallHats as $smallHat)
            <a class="relative singleBook" href="/hatstory/{{ $smallHat->hat_id }}">
                <img src="{{ URL::asset('images/book_front.png') }}" alt="Front of the book" style="width: 220px; min-width: 220px;">
                <p class="text-xl italic absolute w-full text-center" style="top: 10%; transform: translateY(0%);">{{ $smallHat->hat_name }}</p>
                <p class="font-thin absolute w-full text-center" style="top: 20%; transform: translateY(0%);">and.dreamers</p>
                <p class="italic absolute w-full text-center" style="top: 88%; transform: translateY(-50%);">{{ __('pages/home.hat_story_shelf4') }}</p>
                <div class="absolute rounded-full bg-no-repeat bg-cover bg-center block w-32 h-32" style="background-image: url(../storage/hatimage/{{ $smallHat->hat_image }});top: 55%; left: 50%; transform: translate(-50%, -45%);"></div>
            </a>
        @endforeach
    </div>

    <!-- Shelf -->
    <div class="px-20 xl:px-40 2xl:px-60 hidden md:block">
        <div class="pb-12 mb-20 w-full relative bg-white" style="box-shadow: 0 3px 6px #00000029;"></div>
    </div>

    <!-- Shelf Link To Overview -->
    <a class="float-right text-brown text-base md:text-2xl flex pb-10 px-12 md:px-20 xl:px-40 2xl:px-60" href="/hats">
        <p class="pr-2">{{ __('pages/home.more_hat_stories') }}</p>
        <i class="fas fa-arrow-right mt-1"></i>
    </a>
@endsection

@section('css')

    <style>
        @keyframes backInDown {
            0% {
                transform: translateY(-1200px) scale(0.7);
                opacity: 0.7;
            }

            80% {
                transform: translateY(0px) scale(0.7);
                opacity: 0.7;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .bookTurn :nth-child(2) {
            transform: rotate(20deg);
        }

        .bookTurn :nth-child(3) {
            transform: rotate(-5deg);
        }

        .topBook :nth-child(2) {
            transform: rotate(15deg);
        }

        .singleBook {
            transform: rotate(-5deg);
        }

        .hoverBook, .singleBook, .middleBook {
            transition: all .2s ease-in-out;
        }

        .hoverBook:hover, .singleBook:hover, .middleBook:hover {
            transform: scale(1.1);
        }

        .middleBook, .bookTurn {
            margin: 0 auto;
        }
    </style>

@endsection

@section('js')

    <script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $(".addText").fadeOut("slow", function ()
                {
                    $(".addText.removeImage").fadeOut();
                    $(".text").fadeIn().delay(2000).fadeOut();
                    $(".textTwo").delay(3000).fadeIn();
                });
            }, 5000);

        });
    </script>

@endsection
