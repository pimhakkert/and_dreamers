@extends('dashboard.layouts.dashboard-inside')

@section('title', 'Profile')

@section('content')
    <!-- Background Images -->
    <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}" alt="">
    <img class="absolute w-small -right-52 xl:mt-52 mt-500px hidden 2xl:block" src="{{ URL::asset('images/solid_cirkel.svg') }}" alt="">

    <!-- Content Grid -->
    <div class="pt-16 relative text-brown" style="margin-bottom: 100px;">
        <!-- Left Menu -->
        <div class="pl-10 md:fixed h-full grid md:w-auto w-full z-50" style="grid-template-columns: auto">
            <!-- Top Left Menu -->
            <p class="text-3xl italic md:pb-6 pb-10">Profile</p>

            <!-- Bottom Left Menu -->
            <div class="flex md:flex-col flex-row md:justify-end md:items-start md:mb-20 md:static justify-center items-end md:pb-0 z-50 fixed bottom-0 w-full md:w-auto md:pt-0 pt-6 md:bg-transparent bg-white left-0">
                <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-brown text-center flex items-center justify-center mb-5 hover:bg-lightbrown tooltipProfile menuOne" href="{{ route('profile.show') }}">
                    <img src="{{ URL::asset('images/profile-wit.svg') }}" alt="Profile" class="mb-2 ml-0.5 menuOne-image md:w-12 md:h-12 w-10 h-10">
                    <span class="tooltiptext hidden md:block">Change your username, password, 2fa or email</span>
                </a>
                <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHat menuTwo" href="{{ route('hatstories.index') }}">
                    <img src="{{ URL::asset('images/hoed.svg') }}" alt="Hat stories" class="menuTwo-image md:w-12 md:h-12 w-10 h-10">
                    <span class="tooltiptext hidden md:block">View your hats here. Add, remove or edit them</span>
                </a>
                <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuThree" href="/">
                    <img src="{{ URL::asset('images/home.svg') }}" alt="Home" class="mb-2 menuThree-image md:w-12 md:h-12 w-10 h-10">
                    <span class="tooltiptext hidden md:block">Go to the homepage</span>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipLogout menuFour" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <img src="{{ URL::asset('images/logout.svg') }}" alt="Logout" class="menuFour-image md:w-12 md:h-12 w-10 h-10">
                        <span class="tooltiptext hidden md:block">Click to logout</span>
                    </a>
                </form>
            </div>
        </div>

        <!-- Form -->
        <div class="md:px-60 px-10">
            <div class="grid grid-cols-1 xl:grid-cols-2 mb-20 gap-20">
                <div class="justify-self-center">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')
                    @endif
                </div>
                <div class="justify-self-center">
                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        @livewire('profile.update-password-form')
                    @endif
                </div>
            </div>
            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                @livewire('profile.two-factor-authentication-form')
            @endif
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

    <script>
        $(document).ready(function(){
            $('.menuOne').hover(
                function(){$(this).children('.menuOne-image').attr('src', '{{ URL::asset('images/profile.svg') }}')},
                function(){$(this).children('.menuOne-image').attr('src', '{{ URL::asset('images/profile-wit.svg') }}')}
            );
            $('.menuTwo').hover(
                function(){$(this).children('.menuTwo-image').attr('src', '{{ URL::asset('images/hoed-wit.svg') }}')},
                function(){$(this).children('.menuTwo-image').attr('src', '{{ URL::asset('images/hoed.svg') }}')}
            );
            $('.menuThree').hover(
                function(){$(this).children('.menuThree-image').attr('src', '{{ URL::asset('images/home-wit.svg') }}')},
                function(){$(this).children('.menuThree-image').attr('src', '{{ URL::asset('images/home.svg') }}')}
            );
            $('.menuFour').hover(
                function(){$(this).children('.menuFour-image').attr('src', '{{ URL::asset('images/logout-wit.svg') }}')},
                function(){$(this).children('.menuFour-image').attr('src', '{{ URL::asset('images/logout.svg') }}')}
            );
            setTimeout(function(){
                $('.removePopup').fadeOut();
            }, 5000);
        });
    </script>

@endsection
