@extends('website.layouts.website')

@section('title', 'Hat Stories')

@section('content')
    <div class="overflow-x-hidden">
        <!-- Background Images -->
        <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}" alt="">
        <img class="absolute lg:w-big w-small hidden lg:block" src="{{ URL::asset('images/rechthoek.svg') }}" alt="" style="margin-top: 100px;">

        <!-- Content Grid -->
        <div class="pt-16">
            <!-- Left Menu -->
            <div class="text-brown md:pl-10 md:fixed h-full grid md:w-auto w-full z-50" style="grid-template-columns: auto">
                <!-- Top Left Menu -->
                <div class="pl-10 md:pl-0 z-50 md:pb-0 pb-10">
                </div>

                <!-- Bottom Left Menu -->
                <div class="flex md:flex-col flex-row md:justify-end md:items-start md:mb-20 md:static justify-center items-end md:pb-0 z-50 fixed bottom-0 w-full md:w-auto md:pt-0 pt-6 md:bg-transparent bg-white">
                    <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuOne" href="/">
                        <img src="../images/home.svg" alt="Home" class="mb-2 ml-0.5 menuOne-image md:w-12 md:h-12 w-10 h-10">
                        <span class="tooltiptext hidden md:block">Go to our homepage!</span>
                    </a>
                    <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-brown text-center flex items-center justify-center mb-5 hover:bg-lightbrown tooltipHome menuTwo" href="/hats">
                        <img src="../images/hoed-wit.svg" alt="All hats" class="menuTwo-image md:w-12 md:h-12 w-10 h-10">
                        <span class="tooltiptext hidden md:block">View all of our hats!</span>
                    </a>
                    <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuThree" href="/">
                        <img src="../images/mail.svg" alt="Contact" class="mt-1 mb-2 menuThree-image md:w-12 md:h-12 w-10 h-10">
                        <span class="tooltiptext hidden md:block">Contact us!</span>
                    </a>
                    <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuThree" href="/">
                        <img src="../images/insta.svg" alt="Instagram" class="mt-1 mb-2 menuFour-image md:w-12 md:h-12 w-10 h-10">
                        <span class="tooltiptext hidden md:block">View our Instagram!</span>
                    </a>
                </div>
            </div>

            <div class="container absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%); width: 100vw; height: 800px;">
                <div class="canvas absolute left-0 top-0 h-auto flex p-72" style="transform: translate(-50vw, -50vw); width: 200%; transition: 1.5s ease-out;">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                    @foreach ($hatStory as $hat)
                            <a class="relative layer p-8" data-speed="2" href="/hatstory/{{ $hat->hat_id }}">
                                <img src="../images/book_front.png" alt="Front of the book">
                                <p class="text-xl italic absolute w-full text-center" style="left: 50%; top: 10%; transform: translate(-50%, 0%);">{{ $hat->hat_name }}</p>
                                <p class="font-thin absolute" style="left: 50%; top: 20%; transform: translate(-50%, 0%);">and.dreamers</p>
                                <p class="italic absolute w-full text-center" style="left: 50%; top: 85%; transform: translate(-50%, -50%);">Let's take a look inside</p>
                                <div class="absolute hatStory-circle rounded-full bg-no-repeat bg-cover bg-center block w-32 h-32 top-0 left-0" style="background-image: url(../storage/hatimage/{{ $hat->hat_image }}); left: 50%; top: 55%; transform: translate(-50%, -45%);"></div>
                            </a>
                            <div class="hidden sm:block p-2"></div>
                            <div class="hidden sm:block md:hidden p-2"></div>
                    @endforeach
                    </div>
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
    $(document).ready(function(){
        $('.menuOne').hover(
            function(){$(this).children('.menuOne-image').attr('src', '../images/home-wit.svg')},
            function(){$(this).children('.menuOne-image').attr('src', '../images/home.svg')}
        );
        $('.menuTwo').hover(
            function(){$(this).children('.menuTwo-image').attr('src', '../images/hoed.svg')},
            function(){$(this).children('.menuTwo-image').attr('src', '../images/hoed-wit.svg')}
        );
        $('.menuThree').hover(
            function(){$(this).children('.menuThree-image').attr('src', '../images/mail-wit.svg')},
            function(){$(this).children('.menuThree-image').attr('src', '../images/mail.svg')}
        );
        $('.menuFour').hover(
            function(){$(this).children('.menuFour-image').attr('src', '../images/insta-wit.svg')},
            function(){$(this).children('.menuFour-image').attr('src', '../images/insta.svg')}
        );
    });

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
