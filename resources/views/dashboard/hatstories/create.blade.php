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

    <!-- Hat story -->
    <div class="relative text-brown">
        <p class="text-5xl italic pt-20 pl-10">Hat story</p>
        <!-- Open Form -->
        <form class="pt-44" method="post" action="{{ route('hatstories.store') }}" enctype="multipart/form-data">
            @csrf
                <!-- Grid -->
                <div class="grid lg:grid-cols-3 lg:grid-rows-3 gap-7">
                    <!-- Cover Book -->
                    <div class="bg-lightbrown">
                        <p class="text-5xl">BOOK</p>
                        <div class="form-group">
                            <label for="hat_cover_title">TITLE</label>
                            <input type="text" name="hat_cover_title" required>
                            <label for="hat_cover_text">TEXT</label>
                            <textarea name="hat_cover_text" required></textarea>
                        </div>
                    </div>
                    <!-- Cover Image -->
                    <div>
                        <p class="text-5xl">IMAGE</p>
                        <label for="hat_cover_image hidden">IMAGE</label>
                        <input type="file" name="hat_cover_image" required>
                    </div>
                    <!-- Cover Extra -->
                    <div class="bg-lightbrown-light">
                        <p class="text-5xl">EXTRA</p>
                        <div class="flex">
                            <label>
                                <input type="radio" name="hat_cover_hover" value="EDE6E0" checked>
                                <img class="radio-image" src="../images/kleur1.svg" alt="">
                            </label>
                            <label>
                                <input type="radio" name="hat_cover_hover" value="D5C1B8">
                                <img class="radio-image" src="../images/kleur2.svg" alt="">
                            </label>
                            <label>
                                <input type="radio" name="hat_cover_hover" value="825550">
                                <img class="radio-image" src="../images/kleur3.svg" alt="">
                            </label>
                            <label>
                                <input type="radio" name="hat_cover_hover" value="444243">
                                <img class="radio-image" src="../images/kleur4.svg" alt="">
                            </label>
                        </div>
                        <label for="hat_cover_opacity">Opacity</label>
                        <output>59</output>%
                        <input type="range" name="hat_cover_opacity" min="0" value="59" max="100" oninput="this.previousElementSibling.value = this.value">
                    </div>

                    <!-- Page One -->
                    <div class="bg-lightbrown">
                        <p class="text-5xl">PAGE 1</p>
                        <div class="form-group">
                            <label for="hat_pageone_title">Title</label>
                            <input type="text" name="hat_pageone_title" required>
                            <label for="hat_pageone_heading">Heading</label>
                            <input type="text" name="hat_pageone_heading" required>
                            <label for="hat_pageone_text">Text</label>
                            <textarea name="hat_pageone_text" required></textarea>
                        </div>
                    </div>
                    <!-- Page One Image -->
                    <div>
                        <p class="text-5xl">IMAGE</p>
                        <label for="hat_pageone_image hidden">Image</label>
                        <input type="file" name="hat_pageone_image" required>
                    </div>
                    <!-- Page One Extra -->
                    <div class="bg-lightbrown-light">
                        <p class="text-5xl">EXTRA</p>
                        <div class="flex">
                            <label>
                                <input type="radio" name="hat_pageone_hover" value="EDE6E0" checked>
                                <img class="radio-image" src="../images/kleur1.svg" alt="">
                            </label>
                            <label>
                                <input type="radio" name="hat_pageone_hover" value="D5C1B8">
                                <img class="radio-image" src="../images/kleur2.svg" alt="">
                            </label>
                            <label>
                                <input type="radio" name="hat_pageone_hover" value="825550">
                                <img class="radio-image" src="../images/kleur3.svg" alt="">
                            </label>
                            <label>
                                <input type="radio" name="hat_pageone_hover" value="444243">
                                <img class="radio-image" src="../images/kleur4.svg" alt="">
                            </label>
                        </div>
                        <label for="hat_pageone_opactity">Opacity</label>
                        <output>59</output>%
                        <input type="range" name="hat_pageone_opacity" min="0" value="59" max="100" oninput="this.previousElementSibling.value = this.value">
                    </div>

                    <!-- Page Two -->
                    <div class="bg-lightbrown">
                        <p class="text-5xl">PAGE 2</p>
                        <div class="form-group">
                            <label for="hat_pagetwo_title">Title</label>
                            <input type="text" name="hat_pagetwo_title" required>
                            <label for="hat_pagetwo_heading">Heading</label>
                            <input type="text" name="hat_pagetwo_heading" required>
                            <label for="hat_pagetwo_text">Text</label>
                            <textarea name="hat_pagetwo_text" required></textarea>
                        </div>
                    </div>
                    <!-- Page Two Image -->
                    <div>
                        <p class="text-5xl">IMAGE</p>
                        <label for="hat_pagetwo_image hidden">Image</label>
                        <input type="file" name="hat_pagetwo_image" required>
                    </div>
                    <!-- Hat Cover Extra -->
                    <div class="bg-lightbrown-light">
                        <p class="text-5xl">EXTRA</p>
                        <div class="flex">
                            <label>
                                <input type="radio" name="hat_pagetwo_hover" value="EDE6E0" checked>
                                <img class="radio-image" src="../images/kleur1.svg" alt="">
                            </label>
                            <label>
                                <input type="radio" name="hat_pagetwo_hover" value="D5C1B8">
                                <img class="radio-image" src="../images/kleur2.svg" alt="">
                            </label>
                            <label>
                                <input type="radio" name="hat_pagetwo_hover" value="825550">
                                <img class="radio-image" src="../images/kleur3.svg" alt="">
                            </label>
                            <label>
                                <input type="radio" name="hat_pagetwo_hover" value="444243">
                                <img class="radio-image" src="../images/kleur4.svg" alt="">
                            </label>
                        </div>
                        <label for="hat_pagetwo_opactity">Opacity</label>
                        <output>59</output>%
                        <input type="range" name="hat_pagetwo_opacity" min="0" value="59" max="100" oninput="this.previousElementSibling.value = this.value">
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

        /* IMAGE STYLES */
        [type=radio] + img {
            cursor: pointer;
        }

        .radio-image {
            width:60px;
        }

        /* CHECKED STYLES */
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
