@extends('dashboard.layouts.dashboard-outside')

@section('title', '2FA')

@section('content')
    <form method="POST" action="{{ route('two-factor.login') }}">
        @csrf
    </form>
@endsection

@section('css')

@endsection

@section('js')

@endsection
