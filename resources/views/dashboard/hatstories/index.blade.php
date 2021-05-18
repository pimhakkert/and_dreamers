@extends('dashboard.layouts.dashboard-inside')

@section('content')
    <!-- Background Images -->
    <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}">

    <!-- Content Grid -->
    <div class="pt-16">
        <!-- Left Menu -->
        <div class="text-brown pl-10 fixed h-full grid fixed z-50" style="grid-template-columns: auto">
            <!-- Top Left Menu -->
            <div>
                <p class="text-3xl italic pb-6">Hat stories</p>
                <a href="{{ route('hatstories.create') }}" class="pl-5 hover:text-hoverbrown">
                    <i class="fas fa-plus pr-5"></i>
                    Add hat
                </a>
            </div>

            <!-- Bottom Left Menu -->
            <div class="flex flex-col justify-end mb-20">
                <a class="w-16 h-16 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipProfile menuOne" href="{{ route('profile.show') }}">
                    <img src="../images/profile.svg" alt="Profile" width="55px" height="55px" class="mb-2 ml-0.5 menuOne-image">
                    <span class="tooltiptext">Change your username, password, 2fa or email</span>
                </a>
                <a class="w-16 h-16 rounded-full bg-brown text-center flex items-center justify-center mb-5 hover:bg-lightbrown tooltipHat menuTwo" href="{{ route('hatstories.index') }}">
                    <img src="../images/hoed-wit.svg" alt="Hat stories" width="60px" height="60px" class="menuTwo-image">
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

        <!-- Hat Stories -->
        <div class="pl-64 grid xl:grid-cols-3 xl:gap-x-24 lg:gap-x-10 gap-y-28 lg:grid-cols-2 gap-x-0 grid-cols-1">
            @foreach ($hatstory as $hat)
                <div class="w-64 h-64 relative justify-self-center relative z-0">
                    <div class="border-brown rounded-full bg-no-repeat bg-cover bg-center block w-64 h-64 mb-5 " style="background-image: url(/storage/hatimage/{{ $hat->hat_cover_image }}); border-width: 12px"></div>
                    <p class="text-center text-3xl"> {{ $hat->hat_cover_title }}</p>
                    <!-- Buttons -->
                    <div class="flex absolute left-14 mt-5" style="bottom: -10px">
                        <!-- Delete Button -->
                        <form action="{{ route('hatstories.destroy', $hat->hat_id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="mr-5 w-16 h-16 rounded-full bg-white text-center flex items-center justify-center hover:bg-red tooltipDelete deleteButton" style="box-shadow: 0 3px 6px #00000029">
                                <input type="image" src="../images/trash.svg" alt="Delete" width="50px" height="50px" class="ml-0.5 mb-1 deleteButton-image">
                                <span class="tooltiptext">Are you sure you want to delete this hat?</span>
                            </div>
                        </form>
                        <!-- Edit Button -->
                        <a href="{{ route('hatstories.edit', $hat->hat_id) }}" style="box-shadow: 0 3px 6px #00000029" class="w-16 h-16 rounded-full bg-white text-center flex items-center justify-center hover:bg-lightbrown">
                            <img src="../images/edit.svg" alt="" width="50px" height="50px" class="ml-0.5 mb-0.5">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('css')
    .tooltipProfile, .tooltipHat , .tooltipHome, .tooltipLogout, .tooltipDelete {
        position: relative;
    }

    .tooltipProfile .tooltiptext, .tooltipHat .tooltiptext, .tooltipHome .tooltiptext, .tooltipLogout .tooltiptext, .tooltipDelete .tooltiptext {
        visibility: hidden;
        background-color: rgb(237,230,224);
        color: #825550;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        width: 220px;
        box-shadow: 0 3px 6px #00000029;
    }
    .tooltipProfile .tooltiptext, .tooltipHat .tooltiptext, .tooltipHome .tooltiptext, .tooltipLogout .tooltiptext {
        left: 120%;
    }

    .tooltipDelete .tooltiptext {
        bottom: 120%;
        left: 50%;
        margin-left: -110px;
    }

    .tooltipProfile .tooltiptext, .tooltipHat .tooltiptext {
        top: 3px;
    }

    .tooltipHome .tooltiptext, .tooltipLogout .tooltiptext {
        top: 15px;
    }

    .tooltipProfile .tooltiptext::after, .tooltipHat .tooltiptext::after, .tooltipHome .tooltiptext::after, .tooltipLogout .tooltiptext::after, .tooltipDelete .tooltiptext::after {
        content: "";
        position: absolute;
        border-width: 10px;
        border-style: solid;
    }

    .tooltipProfile .tooltiptext::after, .tooltipHat .tooltiptext::after, .tooltipHome .tooltiptext::after, .tooltipLogout .tooltiptext::after {
        top: 50%;
        right: 100%;
        margin-top: -10px;
        border-color: transparent rgb(237,230,224) transparent transparent;
    }

    .tooltipDelete .tooltiptext::after {
        top: 100%;
        left: 50%;
        margin-left: -10px;
        border-color: rgb(237,230,224) transparent transparent transparent;
    }

    .tooltipProfile:hover .tooltiptext, .tooltipHat:hover .tooltiptext, .tooltipHome:hover .tooltiptext, .tooltipLogout:hover .tooltiptext, .tooltipDelete:hover .tooltiptext {
        visibility: visible;
    }

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('.deleteButton').hover(
                function(){$(this).children('.deleteButton-image').attr('src', '../images/trash-wit.svg')},
                function(){$(this).children('.deleteButton-image').attr('src', '../images/trash.svg')}
            );
            $('.menuOne').hover(
                function(){$(this).children('.menuOne-image').attr('src', '../images/profile-wit.svg')},
                function(){$(this).children('.menuOne-image').attr('src', '../images/profile.svg')}
            );
            $('.menuTwo').hover(
                function(){$(this).children('.menuTwo-image').attr('src', '../images/hoed.svg')},
                function(){$(this).children('.menuTwo-image').attr('src', '../images/hoed-wit.svg')}
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
