@extends('dashboard.layouts.dashboard-inside')

@section('content')

    <!-- Background Images -->
    <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}">
    <img class="absolute w-small right-0 -mr-52 xl:mt-52 mt-500px" src=" {{ URL::asset('images/solid_cirkel.svg') }}">

    <!-- Errors -->
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <!-- Content Grid -->
    <div class="pt-16 relative text-brown">
        <!-- Left Menu -->
        <div class="pl-10 fixed h-full grid fixed z-50" style="grid-template-columns: auto">
            <!-- Top Left Menu -->
            <div>
                <p class="text-3xl italic pb-6">Edit hat</p>
            </div>

            <!-- Bottom Left Menu -->
            <div class="flex flex-col justify-end mb-20">
                <a class="w-16 h-16 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipProfile menuOne" href="{{ route('profile.show') }}">
                    <img src="../../images/profile.svg" alt="Profile" width="55px" height="55px" class="mb-2 ml-0.5 menuOne-image">
                    <span class="tooltiptext">Change your username, password, 2fa or email</span>
                </a>
                <a class="w-16 h-16 rounded-full bg-brown text-center flex items-center justify-center mb-5 hover:bg-lightbrown tooltipHat menuTwo" href="{{ route('hatstories.index') }}">
                    <img src="../../images/hoed-wit.svg" alt="Hat stories" width="60px" height="60px" class="menuTwo-image">
                    <span class="tooltiptext">View your hats here. Add, remove or edit them</span>
                </a>
                <a class="w-16 h-16 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuThree" href="/">
                    <img src="../../images/home.svg" alt="Home" width="50px" height="50px" class="mb-2 menuThree-image">
                    <span class="tooltiptext">Go to the homepage</span>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="w-16 h-16 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipLogout menuFour" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <img src="../../images/logout.svg" alt="Logout" width="50px" height="50px" class="menuFour-image">
                        <span class="tooltiptext">Click to logout</span>
                    </a>
                </form>
            </div>
        </div>

        <!-- <div  class="max-w-lg bg-no-repeat bg-cover bg-center" style="background-image: url(/storage/hatimage/{{ $hatstory->hat_pageone_image }});"> -->

        <!-- Edit hat -->
        <div class="pl-64">
            <!-- Open Form -->
            <form method="post" action="{{ route('hatstories.update', $hatstory->hat_id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid xl:grid-cols-3 xl:grid-rows-3 gap-7 px-10" style="grid-template-rows: auto">
                    <!-- Hat Name & Text -->
                    <div class="flex flex-col bg-lightbrown">
                        <label class="text-2xl" for="hat_name">NAME</label>
                        <input type="text" name="hat_name" value="{{ $hatstory->hat_name }}" required>
                        @error('hat_name')
                        <p>{{ $message }}</p>
                        @enderror
                        <label class="text-2xl" for="hat_text">TEXT</label>
                        <textarea name="hat_text" required>{{ $hatstory->hat_text }}</textarea>
                        @error('hat_text')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Hat Image -->
                    <div>
                        <label class="hidden" for="hat_image">IMAGE</label>
                        <input type="file" name="hat_image">
                        @error('hat_cover_image')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Hat Specifications -->
                    <div class="flex flex-col bg-lightbrown">
                        <label class="text-2xl" for="hat_size">SIZE</label>
                        <input type="text" name="hat_size" value="{{ $hatstory->hat_size }}" required>
                        @error('hat_size')
                        <p>{{ $message }}</p>
                        @enderror
                        <label class="text-2xl" for="hat_color">COLOR</label>
                        <input type="text" name="hat_color" value="{{ $hatstory->hat_color }}" required>
                        @error('hat_color')
                        <p>{{ $message }}</p>
                        @enderror
                        <label class="text-2xl" for="hat_material">MATERIAL</label>
                        <input type="text" name="hat_material" value="{{ $hatstory->hat_material }}" required>
                        @error('hat_material')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Page 1 Text -->
                    <div class="flex flex-col bg-lightbrown">
                        <label class="text-2xl" for="hat_pageone_text">TEXT</label>
                        <textarea name="hat_pageone_text" required>{{$hatstory->hat_pageone_text}}</textarea>
                        @error('hat_pageone_text')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Page 1 Image -->
                    <div>
                        <label class="hidden" for="hat_pageone_image">IMAGE</label>
                        <input type="file" name="hat_pageone_image">
                        @error('hat_pageone_image')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div></div>

                    <!-- Page 2 Text -->
                    <div class="flex flex-col bg-lightbrown">
                        <label class="text-2xl" for="hat_pagetwo_text">TEXT</label>
                        <textarea name="hat_pagetwo_text" required>{{ $hatstory->hat_pagetwo_text }}</textarea>
                        @error('hat_pagetwo_text')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Page 2 Images -->
                    <div>
                        <label class="hidden" for="hat_pagetwo_imageone hidden">IMAGE</label>
                        <input type="file" name="hat_pagetwo_imageone">
                        @error('hat_pagetwo_imageone')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="hidden" for="hat_pagetwo_imagetwo hidden">IMAGE</label>
                        <input type="file" name="hat_pagetwo_imagetwo">
                        @error('hat_pagetwo_imagetwo')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Button -->
                <div class="w-full text-center">
                    <button>SAVE</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
