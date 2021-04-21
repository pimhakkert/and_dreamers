@extends('dashboard.layouts.dashboard-inside')

@section('content')

    <!-- Background Images -->
    <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}">
    <img class="absolute w-small right-0 -mr-52 xl:mt-52 mt-500px" src=" {{ URL::asset('images/solid_cirkel.svg') }}">

    <!-- Logout -->
    <form method="POST" action="{{ route('logout') }}" class="absolute text-brown pt-8 right-0 pr-10 z-50">
        @csrf
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
            <span class="pr-6">Log out</span>
            <i class="fas fa-sign-out-alt text-3xl bg-white-light" style="width: 70px;height: 70px; border-radius: 50%; text-align: center; line-height: 30px; vertical-align: middle; padding: 20px;"></i>
        </a>
    </form>

    <!-- Errors -->
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <!-- Hat story -->
    <div class="relative text-brown">
        <p class="text-5xl italic pt-20 pl-10">Hat story</p>
        <!-- Open Form -->
        <form class="pt-44" method="post" action="{{ route('hatstories.update', $hatstory->hat_id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Grid -->
            <div class="grid xl:grid-cols-3 xl:grid-rows-3 gap-7 px-10" style="grid-template-rows: auto">
                <!-- Cover Book -->
                <div class="bg-lightbrown py-16 px-16 max-w-lg">
                    <p class="text-5xl absolute -mt-20 -ml-10">BOOK</p>
                    <div class="form-group" style="margin-top: 0 !important;">
                        <label for="hat_cover_title">TITLE</label>
                        <input class="mb-10" type="text" name="hat_cover_title" value="{{ $hatstory->hat_cover_title }}" required>
                        @error('hat_cover_title')
                        <p>{{ $message }}</p>
                        @enderror
                        <label for="hat_cover_text">TEXT</label>
                        <textarea name="hat_cover_text" required>{{ $hatstory->hat_cover_text }}</textarea>
                        @error('hat_cover_text')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- Cover Image -->
                <div class="max-w-lg bg-no-repeat bg-cover bg-center" style="background-image: url(/storage/hatimage/{{ $hatstory->hat_cover_image }});">
                    <p class="text-5xl absolute -mt-4 ml-6">IMAGE</p>
                    <label class="hidden" for="hat_cover_image">IMAGE</label>
                    <input class="ml-50" type="file" name="hat_cover_image">
                    @error('hat_cover_image')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <!-- Cover Extra -->
                <div class="bg-lightbrown-light py-16 px-16 max-w-lg">
                    <p class="text-5xl absolute -mt-20 -ml-10">EXTRA</p>
                    <p class="text-brown font-semibold text-lg lg:text-xl 2xl:text-2xl pb-5">HOVER COLOR</p>
                    <div class="flex space-x-4 pb-3">
                        <label>
                            <input type="radio" name="hat_cover_hover" value="EDE6E0" @if($hatstory->hat_cover_hover == "EDE6E0") checked @endif>
                            <img class="w-14" src="../../images/kleur1.svg" alt="">
                        </label>
                        <label>
                            <input type="radio" name="hat_cover_hover" value="D5C1B8" @if($hatstory->hat_cover_hover == "D5C1B8") checked @endif>
                            <img class="w-14" src="../../images/kleur2.svg" alt="">
                        </label>
                        <label>
                            <input type="radio" name="hat_cover_hover" value="825550" @if($hatstory->hat_cover_hover == "825550") checked @endif>
                            <img class="w-14" src="../../images/kleur3.svg" alt="">
                        </label>
                        <label>
                            <input type="radio" name="hat_cover_hover" value="444243" @if($hatstory->hat_cover_hover == "444243") checked @endif>
                            <img class="w-14" src="../../images/kleur4.svg" alt="">
                        </label>
                    </div>
                    <div class="flex flex-col">
                        <label for="hat_cover_opacity" class="text-brown font-semibold text-lg lg:text-xl 2xl:text-2xl pb-5">OPACITY</label>
                        <div>
                            <output class="text-brown font-semibold text-lg lg:text-xl 2xl:text-2xl pb-5">{{ $hatstory->hat_cover_opacity }}</output>%
                            <input type="range" name="hat_cover_opacity" min="0" value="{{ $hatstory->hat_cover_opacity }}" max="100" oninput="this.previousElementSibling.value = this.value">
                        </div>
                    </div>
                </div>

                <!-- Page One -->
                <div class="bg-lightbrown py-16 px-16 max-w-lg">
                    <p class="text-5xl absolute -mt-20 -ml-10">PAGE 1</p>
                    <div class="form-group" style="margin-top: 0 !important;">
                        <label for="hat_pageone_title">Title</label>
                        <input class="mb-10" type="text" name="hat_pageone_title" value="{{ $hatstory->hat_pageone_title }}" required>
                        @error('hat_pageone_title')
                        <p>{{ $message }}</p>
                        @enderror
                        <label for="hat_pageone_heading">Heading</label>
                        <input class="mb-10" type="text" name="hat_pageone_heading" value="{{ $hatstory->hat_pageone_heading }}" required>
                        @error('hat_pageone_heading')
                        <p>{{ $message }}</p>
                        @enderror
                        <label for="hat_pageone_text">Text</label>
                        <textarea name="hat_pageone_text" placeholder="Text describing the title and/or heading" required>{{$hatstory->hat_pageone_text}}</textarea>
                        @error('hat_pageone_text')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- Page One Image -->
                <div  class="max-w-lg bg-no-repeat bg-cover bg-center" style="background-image: url(/storage/hatimage/{{ $hatstory->hat_pageone_image }});">
                    <p class="text-5xl absolute -mt-4 ml-6">IMAGE</p>
                    <label class="hidden" for="hat_pageone_image">Image</label>
                    <input type="file" name="hat_pageone_image">
                    @error('hat_pageone_image')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <!-- Page One Extra -->
                <div class="bg-lightbrown-light py-16 px-16 max-w-lg">
                    <p class="text-5xl absolute -mt-20 -ml-10">EXTRA</p>
                    <p class="text-brown font-semibold text-lg lg:text-xl 2xl:text-2xl pb-5">HOVER COLOR</p>
                    <div class="flex space-x-4 pb-3">
                        <label>
                            <input type="radio" name="hat_pageone_hover" value="EDE6E0" @if($hatstory->hat_pageone_hover == "EDE6E0") checked @endif>
                            <img class="w-14" src="../../images/kleur1.svg" alt="">
                        </label>
                        <label>
                            <input type="radio" name="hat_pageone_hover" value="D5C1B8" @if($hatstory->hat_pageone_hover == "D5C1B8") checked @endif>
                            <img class="w-14" src="../../images/kleur2.svg" alt="">
                        </label>
                        <label>
                            <input type="radio" name="hat_pageone_hover" value="825550" @if($hatstory->hat_pageone_hover == "825550") checked @endif>
                            <img class="w-14" src="../../images/kleur3.svg" alt="">
                        </label>
                        <label>
                            <input type="radio" name="hat_pageone_hover" value="444243" @if($hatstory->hat_pageone_hover == "444243") checked @endif>
                            <img class="w-14" src="../../images/kleur4.svg" alt="">
                        </label>
                    </div>
                    <div class="flex flex-col">
                        <label for="hat_pageone_opactity" class="text-brown font-semibold text-lg lg:text-xl 2xl:text-2xl pb-5">Opacity</label>
                        <div>
                            <output class="text-brown font-semibold text-lg lg:text-xl 2xl:text-2xl pb-5">{{ $hatstory->hat_pageone_opacity }}</output>%
                            <input type="range" name="hat_pageone_opacity" min="0" value="{{ $hatstory->hat_pageone_opacity }}" max="100" oninput="this.previousElementSibling.value = this.value">
                        </div>
                    </div>
                </div>

                <!-- Page Two -->
                <div class="bg-lightbrown py-16 px-16 max-w-lg">
                    <p class="text-5xl absolute -mt-20 -ml-10">PAGE 2</p>
                    <div class="form-group">
                        <label for="hat_pagetwo_title">Title</label>
                        <input class="mb-10" type="text" name="hat_pagetwo_title" value="{{ $hatstory->hat_pagetwo_title }}" required>
                        @error('hat_pagetwo_title')
                        <p>{{ $message }}</p>
                        @enderror
                        <label for="hat_pagetwo_heading">Heading</label>
                        <input class="mb-10" type="text" name="hat_pagetwo_heading" value="{{ $hatstory->hat_pagetwo_heading }}" required>
                        @error('hat_pagetwo_heading')
                        <p>{{ $message }}</p>
                        @enderror
                        <label for="hat_pagetwo_text">Text</label>
                        <textarea name="hat_pagetwo_text" placeholder="Text describing the title and/or heading" required>{{ $hatstory->hat_pagetwo_text }}</textarea>
                        @error('hat_pagetwo_text')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- Page Two Image -->
                <div  class="max-w-lg bg-no-repeat bg-cover bg-center" style="background-image: url(/storage/hatimage/{{ $hatstory->hat_pagetwo_image }});">
                    <p class="text-5xl absolute -mt-4 ml-6">IMAGE</p>
                    <label class="hidden" for="hat_pagetwo_image hidden">Image</label>
                    <input type="file" name="hat_pagetwo_image">
                    @error('hat_pagetwo_image')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <!-- Hat Cover Extra -->
                <div class="bg-lightbrown-light py-16 px-16 max-w-lg">
                    <p class="text-5xl absolute -mt-20 -ml-10">EXTRA</p>
                    <p class="text-brown font-semibold text-lg lg:text-xl 2xl:text-2xl pb-5">HOVER COLOR</p>
                    <div class="flex space-x-4 pb-3">
                        <label>
                            <input type="radio" name="hat_pagetwo_hover" value="EDE6E0" @if($hatstory->hat_pagetwo_hover == "EDE6E0") checked @endif>
                            <img class="w-14" src="../../images/kleur1.svg" alt="Color is #EDE6E0">
                        </label>
                        <label>
                            <input type="radio" name="hat_pagetwo_hover" value="D5C1B8" @if($hatstory->hat_pagetwo_hover == "D5C1B8") checked @endif>
                            <img class="w-14" src="../../images/kleur2.svg" alt="Color is #D5C1B8">
                        </label>
                        <label>
                            <input type="radio" name="hat_pagetwo_hover" value="825550" @if($hatstory->hat_pagetwo_hover == "825550") checked @endif>
                            <img class="w-14" src="../../images/kleur3.svg" alt="Color is #825550">
                        </label>
                        <label>
                            <input type="radio" name="hat_pagetwo_hover" value="444243" @if($hatstory->hat_pagetwo_hover == "444243") checked @endif>
                            <img class="w-14" src="../../images/kleur4.svg" alt="Color is #444243">
                        </label>
                    </div>
                    <div class="flex flex-col">
                        <label for="hat_pagetwo_opactity" class="text-brown font-semibold text-lg lg:text-xl 2xl:text-2xl pb-5">Opacity</label>
                        <div>
                            <output class="text-brown font-semibold text-lg lg:text-xl 2xl:text-2xl pb-5">{{ $hatstory->hat_pagetwo_opacity }}</output>%
                            <input type="range" name="hat_pagetwo_opacity" min="0" value="{{ $hatstory->hat_pagetwo_opacity }}" max="100" oninput="this.previousElementSibling.value = this.value">
                        </div>
                    </div>
                </div>
            </div>
            <button>Create</button>
        </form>
    </div>

    <style>
        [type=radio] {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        [type=radio] + img {
            cursor: pointer;
        }

        [type=radio]:checked + img {
            border: 2px solid red;
            border-radius: 50%;
        }
    </style>

@endsection

@section('css')

@endsection

@section('js')

@endsection
