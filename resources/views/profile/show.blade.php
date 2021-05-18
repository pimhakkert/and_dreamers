@extends('dashboard.layouts.dashboard-inside')

@section('title', 'Profile')

@section('content')
    <!-- Background Images -->
    <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}">
    <img class="absolute w-small right-0 -mr-52 xl:mt-52 mt-500px" src=" {{ URL::asset('images/solid_cirkel.svg') }}">

    <!-- Content Grid -->
    <div class="pt-16 relative text-brown">
        <!-- Left Menu -->
        <div class="pl-10 fixed h-full grid fixed z-50" style="grid-template-columns: auto">
            <!-- Top Left Menu -->
            <p class="text-3xl italic pb-6">Profile</p>

            <!-- Bottom Left Menu -->
            <div class="flex flex-col justify-end mb-20">
                <a class="w-16 h-16 rounded-full bg-brown text-center flex items-center justify-center mb-5 hover:bg-white-light tooltipProfile menuOne" href="{{ route('profile.show') }}">
                    <img src="../images/profile-wit.svg" alt="Profile" width="55px" height="55px" class="mb-2 ml-1 menuOne-image">
                    <span class="tooltiptext">Change your username, password, 2fa or email</span>
                </a>
                <a class="w-16 h-16 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHat menuTwo" href="{{ route('hatstories.index') }}">
                    <img src="../images/hoed.svg" alt="Hat stories" width="60px" height="60px" class="menuTwo-image">
                    <span class="tooltiptext">View your hats here. Add, remove or edit them</span>
                </a>
                <a class="w-16 h-16 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuThree" href="/">
                    <img src="../images/home.svg" alt="Home" width="50px" height="50px" class="mb-2 menuThree-image">
                    <span class="tooltiptext">Go to the homepage</span>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="w-16 h-16 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipLogout menuFour" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <img src="../images/logout.svg" alt="Logout" width="50px" height="50px" class="menuFour-image">
                        <span class="tooltiptext">Click to logout</span>
                    </a>
                </form>
            </div>
        </div>

        <!-- Form -->
        <div class="pl-64">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                <div>
                    @livewire('profile.update-profile-information-form')
                </div>
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div>
                    @livewire('profile.update-password-form')
                </div>
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div>
                    @livewire('profile.two-factor-authentication-form')
                </div>
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
                function(){$(this).children('.menuOne-image').attr('src', '../images/profile.svg')},
                function(){$(this).children('.menuOne-image').attr('src', '../images/profile-wit.svg')}
            );
            $('.menuTwo').hover(
                function(){$(this).children('.menuTwo-image').attr('src', '../images/hoed-wit.svg')},
                function(){$(this).children('.menuTwo-image').attr('src', '../images/hoed.svg')}
            );
            $('.menuThree').hover(
                function(){$(this).children('.menuThree-image').attr('src', '../images/home-wit.svg')},
                function(){$(this).children('.menuThree-image').attr('src', '../images/home.svg')}
            );
            $('.menuFour').hover(
                function(){$(this).children('.menuFour-image').attr('src', '../images/logout-wit.svg')},
                function(){$(this).children('.menuFour-image').attr('src', '../images/logout.svg')}
            );
        });
    </script>

@endsection
