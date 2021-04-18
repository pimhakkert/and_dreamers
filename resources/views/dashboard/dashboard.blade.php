@extends('dashboard.layouts.dashboard-inside')

@section('content')
    <!-- Background Images -->
    <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}">
    <img class="absolute w-small right-0 -mr-52 xl:mt-52 mt-500px" src=" {{ URL::asset('images/solid_cirkel.svg') }}">
    <!-- Logout -->
    <form method="POST" action="{{ route('logout') }}" class="absolute text-brown pt-8 right-0 pr-10">
        @csrf
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
            <span class="pr-6">Log out</span>
            <i class="fas fa-sign-out-alt text-3xl bg-white-light" style="width: 70px;height: 70px; border-radius: 50%; text-align: center; line-height: 30px; vertical-align: middle; padding: 20px;"></i>
        </a>
    </form>

    <!-- Dashboard -->
    <div class="relative text-brown lg:px-28 lg:py-32 md:px-20 md:py-24 px-6 py-6">
        <!-- Welcome Message -->
        <p class="text-5xl italic pb-10">Hi, {{ Auth::user()->name }}!</p>

        <!-- Grid -->
        <div class="grid xl:grid-cols-2 grid-cols-1 xl:grid-rows-2 grid-rows-4 lg:gap-y-8 md:gap-y-7 gap-y-6 gap-x-12">
            <!-- View Profile -->
            <a class="bg-white-light border-brown border-5 rounded-2xl lg:py-10 lg:px-8 py-8 px-6 max-w-xl" href="{{ route('profile.show') }}">
                <div class="flex">
                    <i class="far fa-user text-8xl lg:pr-9 pr-6 flex-none"></i>
                    <div class="lg:pr-9 pr-6">
                        <p class="font-bold text-2xl">View profile</p>
                        <p>Change your password, e-mail, username and more personal data.</p>
                    </div>
                    <i class="fas fa-caret-square-right text-2xl self-end ml-auto"></i>
                </div>
            </a>

            <!-- Hat Stories Overview -->
            <a class="bg-white-light border-brown border-5 rounded-2xl lg:py-10 lg:px-8 py-8 px-6 max-w-xl" href="{{ route('hatstories.index') }}">
                <div class="flex">
                    <i class="fab fa-redhat text-8xl lg:pr-9 pr-6 flex-none"></i>
                    <div class="lg:pr-9 pr-6">
                        <p class="font-bold text-2xl">Hat overview</p>
                        <p>Add, remove and edit hat stories.</p>
                    </div>
                    <i class="fas fa-caret-square-right text-2xl self-end ml-auto"></i>
                </div>
            </a>

            <!-- Home Page -->
            <a class="bg-white-light border-brown border-5 rounded-2xl lg:py-10 lg:px-8 py-8 px-6 max-w-xl" href="/">
                <div class="flex">
                    <i class="fas fa-home text-8xl lg:pr-9 pr-6"></i>
                    <div class="lg:pr-9 pr-6">
                        <p class="font-bold text-2xl">Homepage</p>
                        <p>Click here to go to the homepage.</p>
                    </div>
                    <i class="fas fa-caret-square-right text-2xl self-end ml-auto"></i>
                </div>
            </a>

            <!-- Customers -->
            <a class="bg-white-light border-brown border-5 rounded-2xl lg:py-10 lg:px-8 py-8 px-6 max-w-xl" href="#">
                <div class="flex">
                    <i class="fas fa-phone-alt text-8xl lg:pr-9 pr-6"></i>
                    <div class="lg:pr-9 pr-6">
                        <p class="font-bold text-2xl">Customers</p>
                        <p>Curious if you have new requests? Check it here.</p>
                    </div>
                    <i class="fas fa-caret-square-right text-2xl self-end ml-auto"></i>
                </div>
            </a>
        </div>

    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
