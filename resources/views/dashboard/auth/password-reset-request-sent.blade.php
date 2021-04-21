@extends('dashboard.layouts.dashboard-outside')

@section('title', 'Request sent')

@section('content')
    <div class="holder holder-dashboard-outside bg-left lg:bg-center relative">
        <div class="flex flex-col flex-1 2xl:items-center">
            <h1 class="italic font-bold text-4xl 2xl:text-8xl text-black self-end 2xl:self-center mr-14 2xl:mr-0">Go to your mail!</h1>
            <div class="2xl:absolute 2xl:right-20 2xl:bottom-20 flex flex-col items-end mt-10 2xl:mt-0 mr-12 2xl:mr-0">
                <h2 class="text-brown font-bold text-xl 2xl:text-4xl text-right">DIDN'T RECEIVE AN EMAIL?</h2>
                <h3 class="text-black font-bold text-xl 2xl:text-2xl text-right"><a href="{{ route('password.resend-request',['email'=>app('request')->input('email')]) }}">CLICK HERE</a></h3>
            </div>
        </div>

    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
