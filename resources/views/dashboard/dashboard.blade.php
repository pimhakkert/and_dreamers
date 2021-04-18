@extends('dashboard.layouts.dashboard-inside')

@section('content')
    <!-- Dashboard -->
    <div class="text-brown">
        <!-- Welcome Message -->
        <p class="text-5xl italic">Hi, {{ Auth::user()->name }}!</p>

        <!-- View Profile -->
        <div style="background-color: rgba(237,230,224,0.83);">
            <a href="{{ route('profile.show') }}">
                <i class="far fa-user"></i>
                <div>
                    <p class="font-bold">View profile</p>
                    <p>Change your password, e-mail, username and more personal data.</p>
                </div>
                <i class="fas fa-caret-square-right"></i>
            </a>
        </div>

        <!-- Hat Stories Overview -->
        <div style="background-color: rgba(237,230,224,0.83);">
            <a href="{{ route('hatstories.index') }}">
                <i class="fab fa-redhat"></i>
                <div>
                    <p class="font-bold">Hat overview</p>
                    <p>Add, remove and edit hat stories.</p>
                </div>
                <i class="fas fa-caret-square-right"></i>
            </a>
        </div>

        <!-- Home Page -->
        <div style="background-color: rgba(237,230,224,0.83);">
            <a href="/">
                <i class="fas fa-home"></i>
                <div>
                    <p class="font-bold">Homepage</p>
                    <p>Click here to go to the homepage.</p>
                </div>
                <i class="fas fa-caret-square-right"></i>
            </a>
        </div>

        <!-- Customers -->
        <div style="background-color: rgba(237,230,224,0.83);">
            <a>
                <i class="fas fa-phone-alt"></i>
                <div>
                    <p class="font-bold">Customers</p>
                    <p>Curious if you have new requests? Check it here.</p>
                </div>
                <i class="fas fa-caret-square-right"></i>
            </a>
        </div>

    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
