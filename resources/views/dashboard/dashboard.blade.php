@extends('dashboard.layouts.dashboard-inside')

@section('content')
    <!-- Background Images -->
    <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}">
    <img class="absolute w-small -right-52 xl:mt-52 mt-500px hidden lg:block" src="{{ URL::asset('images/solid_cirkel.svg') }}" alt="">

    <!-- Dashboard -->
    <div class="relative text-brown lg:px-28 lg:py-32 md:px-20 md:py-24 px-3 py-3">
        <!-- Welcome Message -->
        <p class="text-3xl italic pb-10">Hi, {{ Auth::user()->name }}!</p>

        <!-- Grid -->
        <div class="grid xl:grid-cols-2 grid-cols-1 xl:grid-rows-2 grid-rows-4 lg:gap-y-8 md:gap-y-7 gap-y-6 gap-x-12">

            <!-- View Profile -->
            <a class="bg-white-light hover:bg-brown hover:text-white-light border-brown border-5 rounded-2xl lg:py-10 lg:px-8 md:py-8 md:px-6 py-2 px-2 max-w-xl profileCard" href="{{ route('profile.show') }}">
                <div class="flex">
                    <img src="{{ URL::asset('images/profile.svg') }}" class="h-20 md:h-24 md:w-32 lg:pr-9 md:pr-6 pr-2 flex-none profileCard-image">
                    <div class="lg:pr-9 pr-6">
                        <p class="font-bold text-base md:text-2xl">View profile</p>
                        <p class="text-xs md:text-base">Change your personal data and 2FA.</p>
                    </div>
                    <img src="{{ URL::asset('images/next.svg') }}" alt="" class="self-end ml-auto profileCard-next" style="width: 40px; height: 40px;">
                </div>
            </a>

            <!-- Hat Stories Overview -->
            <a class="bg-white-light hover:bg-brown hover:text-white-light border-brown border-5 rounded-2xl lg:py-10 lg:px-8 md:py-8 md:px-6 py-2 px-2 max-w-xl hatstoryCard" href="{{ route('hatstories.index') }}">
                <div class="flex">
                    <img src="{{ URL::asset('images/hoed.svg') }}" class="h-20 md:h-24 md:w-32 lg:pr-9 md:pr-6 pr-2 flex-none hatstoryCard-image">
                    <div class="lg:pr-9 pr-6">
                        <p class="font-bold text-base md:text-2xl">Hat overview</p>
                        <p class="text-xs md:text-base">View all your beautiful hats! Add, remove or edit them here.</p>
                    </div>
                    <img src="{{ URL::asset('images/next.svg') }}" alt="" class="self-end ml-auto hatstoryCard-next" style="width: 40px; height: 40px;">
                </div>
            </a>

            <!-- Home Page -->
            <a class="bg-white-light hover:bg-brown hover:text-white-light border-brown border-5 rounded-2xl lg:py-10 lg:px-8 md:py-8 md:px-6 py-2 px-2 max-w-xl homeCard" href="/">
                <div class="flex">
                    <img src="{{ URL::asset('images/home.svg') }}" class="h-20 md:h-24 md:w-32 lg:pr-9 md:pr-6 pr-2 flex-none homeCard-image">
                    <div class="lg:pr-9 pr-6">
                        <p class="font-bold text-base md:text-2xl">Homepage</p>
                        <p class="text-xs md:text-base">Want to view your beautiful homepage? Click here!</p>
                    </div>
                    <img src="{{ URL::asset('images/next.svg') }}" alt="" class="self-end ml-auto homeCard-next" style="width: 40px; height: 40px;">
                </div>
            </a>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="bg-white-light hover:bg-brown hover:text-white-light border-brown border-5 rounded-2xl lg:py-10 lg:px-8 md:py-8 md:px-6 py-2 px-2 max-w-xl flex logoutCard" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                    <img src="{{ URL::asset('images/logout.svg') }}" class="h-20 md:h-24 md:w-32 lg:pr-9 md:pr-6 pr-2 flex-none logoutCard-image">
                    <div class="lg:pr-9 pr-6">
                        <p class="font-bold text-base md:text-2xl">Logout</p>
                        <p class="text-xs md:text-base">Are you done for today? Click here to log out!</p>
                    </div>
                    <img src="{{ URL::asset('images/next.svg') }}" alt="" class="self-end ml-auto logoutCard-next" style="width: 40px; height: 40px;">
                </a>
            </form>

        </div>

    </div>

@endsection

@section('css')

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('.profileCard').hover(
                function(){
                    $('.profileCard-image').attr("src","{{ URL::asset('images/profile-wit.svg') }}")
                    $('.profileCard-next').attr("src","{{ URL::asset('images/next-wit.svg') }}")
                },
                function(){
                    $('.profileCard-image').attr("src","{{ URL::asset('images/profile.svg') }}")
                    $('.profileCard-next').attr("src","{{ URL::asset('images/next.svg') }}")
                },
            );
            $('.hatstoryCard').hover(
                function(){
                    $('.hatstoryCard-image').attr("src","{{ URL::asset('images/hoed-wit.svg') }}")
                    $('.hatstoryCard-next').attr("src","{{ URL::asset('images/next-wit.svg') }}")
                },
                function(){
                    $('.hatstoryCard-image').attr("src","{{ URL::asset('images/hoed.svg') }}")
                    $('.hatstoryCard-next').attr("src","{{ URL::asset('images/next.svg') }}")
                },
            );
            $('.homeCard').hover(
                function(){
                    $('.homeCard-image').attr("src","{{ URL::asset('images/home-wit.svg') }}")
                    $('.homeCard-next').attr("src","{{ URL::asset('images/next-wit.svg') }}")
                },
                function(){
                    $('.homeCard-image').attr("src","{{ URL::asset('images/home.svg') }}")
                    $('.homeCard-next').attr("src","{{ URL::asset('images/next.svg') }}")
                },
            );
            $('.logoutCard').hover(
                function(){
                    $('.logoutCard-image').attr("src","{{ URL::asset('images/logout-wit.svg') }}")
                    $('.logoutCard-next').attr("src","{{ URL::asset('images/next-wit.svg') }}")
                },
                function(){
                    $('.logoutCard-image').attr("src","{{ URL::asset('images/logout.svg') }}")
                    $('.logoutCard-next').attr("src","{{ URL::asset('images/next.svg') }}")
                },
            );
        });
    </script>
@endsection
