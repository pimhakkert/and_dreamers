@extends('dashboard.layouts.dashboard-outside')

@section('title', 'Login')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
    </form>
@endsection

@section('css')

@endsection

@section('js')

@endsection
