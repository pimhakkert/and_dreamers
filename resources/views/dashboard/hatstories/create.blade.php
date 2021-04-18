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
        <form class="pt-32" method="post" action="{{ route('hatstories.store') }}" enctype="multipart/form-data">
            @csrf
                <!-- Grid -->
                <div>
                    <!-- Cover Book -->
                    <div class="bg">
                        <p class="text-5xl">BOOK</p>
                        <div class="form-group">
                            <label for="hat_cover_title">TITLE</label>
                            <input type="text" name="hat_cover_title" required>
                            <label for="hat_cover_text">TEXT</label>
                            <textarea name="hat_cover_text" required></textarea>
                        </div>
                    </div>
                    <!-- Hat Cover Image -->
                    <div>
                        <label for="hat_cover_image">IMAGE</label>
                            <input type="file" name="hat_cover_image" required>
                    </div>
                    <!-- Hat Cover Extra -->
                    <div>

                    </div>

                    <!-- Page One -->
                    <p class="text-5xl">Page 1</p>
                    <!-- Page One Title -->
                    <div>
                        <label for="hat_pageone_title">Title
                            <input type="text" name="hat_pageone_title" required>
                        </label>
                    </div>
                    <!-- Hat Cover Heading -->
                    <div>
                        <label for="hat_pageone_heading">Heading
                            <input type="text" name="hat_pageone_heading" required>
                        </label>
                    </div>
                    <!-- Hat Cover Text -->
                    <div>
                        <label for="hat_pageone_text">Text
                            <textarea name="hat_pageone_text" required></textarea>
                        </label>
                    </div>
                    <!-- Hat Cover Image -->
                    <div>
                        <label for="hat_pageone_image">Image
                            <input type="file" name="hat_pageone_image" required>
                        </label>
                    </div>

                    <!-- Page Two -->
                    <p class="text-5xl">Pagina 2</p>
                    <!-- Page Two Title -->
                    <div>
                        <label for="hat_pagetwo_title">Title
                            <input type="text" name="hat_pagetwo_title" required>
                        </label>
                    </div>
                    <!-- Hat Cover Heading -->
                    <div>
                        <label for="hat_pagetwo_heading">Heading
                            <input type="text" name="hat_pagetwo_heading" required>
                        </label>
                    </div>
                    <!-- Hat Cover Text -->
                    <div>
                        <label for="hat_pagetwo_text">Text
                            <textarea name="hat_pagetwo_text" required></textarea>
                        </label>
                    </div>
                    <!-- Hat Cover Image -->
                    <div>
                        <label for="hat_pagetwo_image">Image
                            <input type="file" name="hat_pagetwo_image" required>
                        </label>
                    </div>
                </div>
            <button>Create</button>
        </form>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
