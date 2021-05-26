@extends('dashboard.layouts.dashboard-inside')

@section('content')
    <!-- Background Images -->
    <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}">
    <img class="absolute w-small right-0 -mr-52 xl:mt-52 mt-500px" src=" {{ URL::asset('images/solid_cirkel.svg') }}">

    <!-- Content Grid -->
    <div class="pt-16">
        <!-- Left Menu -->
        <div class="text-brown pl-10 fixed h-full grid fixed z-50" style="grid-template-columns: auto">
            <!-- Top Left Menu -->
            <div>
                <p class="text-3xl italic pb-6">Hidden hat stories</p>
                <div>
                    <a href="{{ route('hatstories.create') }}" class="pl-5 hover:text-hoverbrown">
                        <i class="fas fa-plus fa-fw pr-10"></i>Add hat
                    </a>
                </div>
                <div class="pt-2">
                    <a href="{{ route('hatstories.index') }}" class="pl-5 hover:text-hoverbrown">
                        <i class="far fa-eye fa-fw pr-10"></i>Show all hats
                    </a>
                </div>
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
        <div class="pl-64 grid xl:grid-cols-3 xl:gap-x-24 lg:gap-x-10 gap-y-28 lg:grid-cols-2 gap-x-0 grid-cols-1 pb-20">
            @foreach ($hatstory as $hat)
                <div class="w-64 h-64 relative justify-self-center relative z-0">
                    <div class="hatStory-circle cursor-pointer border-brown rounded-full bg-no-repeat bg-cover bg-center block w-64 h-64 mb-5 relative" style="background-image: url(/storage/hatimage/{{ $hat->hat_image }}); border-width: 12px">
                        <div class="hatStory-hidden hidden rounded-full absolute top-0 left-0 w-full h-full" style="background-color: rgba(0, 0, 0, 0.38);">
                            <img class="absolute" src="../images/oog-wit.svg" alt="Button to make the hat hidden" style="left: 25px; top: -5px; width: 200px;">
                            <p class="absolute text-lightbrown text-2xl" style="left: 34%; top: 66%;">Display</p>
                        </div>
                    </div>
                    <p class="text-center text-3xl"> {{ $hat->hat_name }}</p>
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
            $('.hatStory-circle').hover(
                function(){$(this).children('.hatStory-hidden').css('display', 'block')},
                function(){$(this).children('.hatStory-hidden').css('display', 'none')},
            );
        });
    </script>
@endsection

