@extends('dashboard.layouts.dashboard-outside')

@section('title', 'Confirm password')

@section('content')
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
    </form>
@endsection

@section('css')

@endsection

@section('js')

@endsection
