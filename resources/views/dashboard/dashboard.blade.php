@extends('dashboard.layouts.dashboard-inside')

@section('content')
    <!-- Background Images -->
    <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}">
    <img class="absolute w-small right-0 -mr-52 xl:mt-52 mt-500px" src=" {{ URL::asset('images/solid_cirkel.svg') }}">

    <!-- Dashboard -->
    <div class="relative text-brown lg:px-28 lg:py-32 md:px-20 md:py-24 px-6 py-6">
        <!-- Welcome Message -->
        <p class="text-3xl italic pb-10">Hi, {{ Auth::user()->name }}!</p>

        <!-- Grid -->
        <div class="grid xl:grid-cols-2 grid-cols-1 xl:grid-rows-2 grid-rows-4 lg:gap-y-8 md:gap-y-7 gap-y-6 gap-x-12">

            <!-- View Profile -->
            <a class="bg-white-light hover:bg-brown hover:text-white-light border-brown border-5 rounded-2xl lg:py-10 lg:px-8 py-8 px-6 max-w-xl profileCard" href="{{ route('profile.show') }}">
                <div class="flex">
                    <img src="../images/profile.svg" class="h-24 w-32 lg:pr-9 pr-6 flex-none profileCard-image">
                    <div class="lg:pr-9 pr-6">
                        <p class="font-bold text-2xl">View profile</p>
                        <p>Change your password, e-mail, username and more personal data.</p>
                    </div>
                    <i class="fas fa-caret-square-right text-2xl self-end ml-auto"></i>
                </div>
            </a>

            <!-- Hat Stories Overview -->
            <a class="bg-white-light hover:bg-brown hover:text-white-light border-brown border-5 rounded-2xl lg:py-10 lg:px-8 py-8 px-6 max-w-xl hatstoryCard" href="{{ route('hatstories.index') }}">
                <div class="flex">
                    <img src="../images/hoed.svg" class="h-24 w-32 lg:pr-9 pr-6 flex-none hatstoryCard-image">
                    <div class="lg:pr-9 pr-6">
                        <p class="font-bold text-2xl">Hat overview</p>
                        <p>View all your beautiful hats! Add, remove or edit them here.</p>
                    </div>
                    <i class="fas fa-caret-square-right text-2xl self-end ml-auto"></i>
                </div>
            </a>

            <!-- Home Page -->
            <a class="bg-white-light hover:bg-brown hover:text-white-light border-brown border-5 rounded-2xl lg:py-10 lg:px-8 py-8 px-6 max-w-xl homeCard" href="/">
                <div class="flex">
                    <img src="../images/home.svg" class="h-24 w-32 lg:pr-9 pr-6 flex-none homeCard-image">
                    <div class="lg:pr-9 pr-6">
                        <p class="font-bold text-2xl">Homepage</p>
                        <p>Want to view your beautiful homepage? Click here!</p>
                    </div>
                    <i class="fas fa-caret-square-right text-2xl self-end ml-auto"></i>
                </div>
            </a>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="bg-white-light hover:bg-brown hover:text-white-light border-brown border-5 rounded-2xl lg:py-10 lg:px-8 py-8 px-6 max-w-xl flex logoutCard" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <img src="../images/logout.svg" class="h-24 w-32 lg:pr-9 pr-6 flex-none logoutCard-image">
                        <div class="lg:pr-9 pr-6">
                            <p class="font-bold text-2xl">Logout</p>
                            <p>Are you done for today? Click here to log out!</p>
                        </div>
                        <i class="fas fa-caret-square-right text-2xl self-end ml-auto"></i>
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
                function(){$('.profileCard-image').attr("src","../images/profile-wit.svg")},
                function(){$('.profileCard-image').attr("src","../images/profile.svg")}
            );
            $('.hatstoryCard').hover(
                function(){$('.hatstoryCard-image').attr("src","../images/hoed-wit.svg")},
                function(){$('.hatstoryCard-image').attr("src","../images/hoed.svg")}
            );
            $('.homeCard').hover(
                function(){$('.homeCard-image').attr("src","../images/home-wit.svg")},
                function(){$('.homeCard-image').attr("src","../images/home.svg")}
            );
            $('.logoutCard').hover(
                function(){$('.logoutCard-image').attr("src","../images/logout-wit.svg")},
                function(){$('.logoutCard-image').attr("src","../images/logout.svg")}
            );
        });
    </script>
@endsection
