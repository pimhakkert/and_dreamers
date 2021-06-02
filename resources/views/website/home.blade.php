@extends('website.layouts.menu_and_footer')

@section('title', 'Home')

@section('content')
    <!-- Background images -->
{{--    <img src="../images/cirkel.svg" alt="Background Image" class="absolute top-60" style="left: -400px; width: 900px">--}}

    <!-- Header -->
    <div class="flex justify-center items-center bg-mainbg" style="height: 100vh; box-shadow: 0 3px 6px #00000029; background-image: url(../images/background.jpeg); background-repeat: no-repeat; background-position: center; background-size: cover;">
        <div class="addText text-9xl text-white italic">
            <div class="bg-lightbrown rounded-full z-50 w-80 md:w-96 removeImage" style="animation: backInDown; animation-duration: 2s;">
                <img src="../images/logo.svg" alt="and.dreamers Logo">
                <p class="hidden text">and.dreamers</p>
            </div>
        </div>
        <div class="hidden textTwo pl-40 pr-36 text-white ">
            <p class="text-xl pb-10">and.dreamers</p>
            <p class="text-5xl">Hat stories from a one-time millinery apprentice who came back to a forgotten dream.</p>
            <p class="text-xl pt-10">Bespoke custom made and one-of-a-kind original designs from recycled and sustainable materials.</p>
        </div>
    </div>

    <!-- Circularity -->
    <div class="inline-block pl-10 md:pl-40 lg:pl-60 xl:pl-80 pt-20">
        <h2 class="text-2xl md:text-4xl italic text-brown">How I want to promote circularity.</h2>
        <p class="text-brown text-sm" style="text-align:right;">Read more about my this on my about me page</p>
    </div>

    <div>

    </div>

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

        .backInDown {
            animation-name: backInDown;
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
                    $(".addText.removeImage").remove();
                    $(".addText").html($("p.text").text());
                    $(".addText").fadeIn();
                    $(".addText").delay(2000).fadeOut();
                    $(".textTwo").delay(3000).fadeIn();
                });
            }, 5000);
        });
    </script>

@endsection
