@extends('dashboard.layouts.dashboard-outside')

@section('title', 'Forgot password')

@section('content')
    <div class="holder holder-dashboard-outside bg-left lg:bg-center">
        <div class="@if($errors->any()) form-has-errors @endif">
            <form method="POST" action="{{ route('password.email') }}" class="bg-white-light max-w-xs lg:max-w-full">
                <div class="p-3 pb-0 flex flex-col items-center">
                    <h1 class="text-3xl lg:text-4xl 2xl:text-6xl -mt-6.5 lg:-mt-7 2xl:-mt-9 text-brown font-semibold mr-4 2xl:mr-0">NEW PASSWORD</h1>
                    @csrf
                    <div class="w-2/3 lg:mt-2">
                        <div class="form-group">
                            <label for="email">E-MAIL</label>
                            <input type="email" name="email" id="email" placeholder="email@domain.com">
                        </div>
                        @if($errors->any())
                            <p class="text-red-light mt-2 text-sm lg:text-lg">We have not recognized your e-mail address</p>
                        @endif
                    </div>
                </div>
                <button class="mt-12 lg:mt-20 lg:mt-3 w-full border-5 border-brown leading-none p-3 lg:p-4 2xl:p-4 pb-2 lg:pb-2 2xl:pb-3 text-md lg:text-lg 2xl:text-2xl text-brown font-semibold hover:text-white-light hover:bg-brown ">SEND</button>
            </form>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
