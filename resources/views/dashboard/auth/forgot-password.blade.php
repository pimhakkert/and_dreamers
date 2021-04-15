@extends('dashboard.layouts.dashboard-outside')

@section('title', 'Forgot password')

@section('content')
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
    </form>
@endsection

@section('css')

@endsection

@section('js')

@endsection
