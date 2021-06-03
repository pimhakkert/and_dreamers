@extends('website.layouts.menu_and_footer')

@section('title', 'Home')

@section('content')
    <!-- Background images -->
    <img src="../images/cirkel.svg" alt="Background Image" class="absolute top-80 z-20" style="left: -350px; width: 900px">

    <!-- Header -->
    <div class="headerMain flex justify-center items-center bg-mainbg" style="height: 100vh; box-shadow: 0 3px 6px #00000029; background-image: url(../images/background.jpeg); background-repeat: no-repeat; background-position: center; background-size: cover;">
        <div class="addText">
            <div class="bg-lightbrown rounded-full z-50 w-80 md:w-96 removeImage" style="animation: backInDown; animation-duration: 2s;">
                <img src="../images/logo.svg" alt="and.dreamers Logo">
            </div>
        </div>
        <div class="hidden text text-white pl-40 z-40">
            <p class="text-xl pb-10">Welcome!</p>
            <p class="text-9xl italic">and.dreamers</p>
        </div>
        <div class="hidden textTwo pl-40 pr-36 text-white z-50">
            <p class="text-xl pb-10">and.dreamers</p>
            <p class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl">Hat stories from a one-time millinery apprentice who came back to a forgotten dream.</p>
            <p class="text-xl pt-10">Bespoke custom made and one-of-a-kind original designs from recycled and sustainable materials.</p>
        </div>
    </div>

    <!-- Circularity -->
    <div class="inline-block flex justify-center py-20 z-40 relative">
        <div>
            <h2 class="text-2xl md:text-4xl italic text-brown">How I want to promote circularity.</h2>
            <p class="text-brown text-sm" style="text-align:right;">Read more about my this on my about me page</p>
        </div>
    </div>

    <!-- Text with balls -->
    <div class="flex flex-col items-center pr-40">
        <!-- First Ball -->
       <div class="pb-10" style="padding-left: 40px;">
           <img src="../images/solid_cirkel.svg" alt="Solid Circle" style="width: 160px; min-width: 160px;">
           <div class="relative">
               <p class="absolute text-brown text-xl font-bold -top-24 left-24 whitespace-nowrap">Buy a hat</p>
               <p class="absolute text-brown -top-16 left-24" style="width: 35vw;">Order a bespoke hat in your size or purchase an existing hat knowing that you will treasure it. When one
               day you are done with your hat return it and get 10% off any new purchase, so the hat can be recycled
               instead of ending up in landfills.</p>
           </div>
       </div>

        <!-- Second Ball -->
        <div class="pb-10" style="padding-left:260px;">
            <img src="../images/solid_cirkel.svg" alt="Solid Circle" style="width: 160px; min-width: 160px;">
            <div class="relative">
                <p class="absolute text-brown text-xl font-bold -top-24 left-24 whitespace-nowrap">Lease a hat</p>
                <p class="absolute text-brown -top-16 left-24" style="width: 35vw;">For an annual amount you can lease a hat, you pay an annual fee to get a new hat after one year, after
                    returning the old one to re-use or recycle.</p>
            </div>
        </div>

        <!-- Third Ball -->
        <div class="pb-10" style="padding-left: 480px;">
            <img src="../images/solid_cirkel.svg" alt="Solid Circle" style="width: 160px; min-width: 160px;">
            <div class="relative">
                <p class="absolute text-brown text-xl font-bold -top-24 left-24 whitespace-nowrap">Rent a hat</p>
                <p class="absolute text-brown -top-16 left-24" style="width: 35vw;">For a set amount depending on the purchase value of the hat you can rent a hat for a day, return it in
                    good condition or pay a cleaning/repair charge.</p>
            </div>
        </div>
    </div>

    <!-- Bookcase Text -->
    <div class="text-brown pl-40 z-40">
        <p class="text-4xl italic">My hat story closet</p>
        <p class="text-sm pt-2">Enjoy my hat stories!</p>
        <p class="text-sm pb-16">Updated regularly so please check back in!</p>
    </div>

    <!-- Bookcase -->
    <div style="display:none">
        {{ $hats =  \App\Models\HatStory::orderBy('created_at', 'desc')->take(3)->get() }}
    </div>
    <div class="flex justify-between px-60 bookTurn">
        @foreach ($hats as $hat)
            <a class="relative" href="/hatstory/{{ $hat->hat_id }}">
                <img src="../images/book_front.png" alt="Front of the book" style="width: 220px; min-width: 220px;">
                <p class="text-xl italic absolute w-full text-center" style="top: 10%; transform: translateY(0%);">{{ $hat->hat_name }}</p>
                <p class="font-thin absolute w-full text-center" style="top: 20%; transform: translateY(0%);">and.dreamers</p>
                <p class="italic absolute w-full text-center" style="top: 88%; transform: translateY(-50%);">Let's take a look inside</p>
                <div class="absolute rounded-full bg-no-repeat bg-cover bg-center block w-32 h-32" style="background-image: url(../storage/hatimage/{{ $hat->hat_image }});top: 55%; left: 50%; transform: translate(-50%, -45%);"></div>
            </a>
        @endforeach
    </div>
    <div class="pb-12 mb-20 w-full" style="box-shadow: 0 3px 6px #00000029; margin-left: 10%; margin-right: 10%; max-width: 1200px;"></div>
    <a class="float-right text-brown text-2xl flex pb-10" style="padding-right: 7%;" href="/hats">
        <p class="pr-2">More hat stories</p>
        <i class="fas fa-arrow-right"></i>
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
                    $(".headerMain").css("justify-content", "unset");
                    $(".text").fadeIn().delay(2000).fadeOut();
                    $(".textTwo").delay(3000).fadeIn();
                });
            }, 5000);

        });
    </script>

@endsection
