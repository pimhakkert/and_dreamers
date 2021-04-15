@extends('dashboard.layouts.dashboard-outside')

@section('title', 'Reset password')

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
    </form>
@endsection

@section('css')

@endsection

@section('js')

@endsection


