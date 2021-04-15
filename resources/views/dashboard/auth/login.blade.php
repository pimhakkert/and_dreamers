@extends('dashboard.layouts.dashboard-outside')

@section('title', 'Login')

@section('content')
    <!-- TEMPORARY -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- TEMPORARY -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <button>LOGIN</button>
    </form>
@endsection

@section('css')

@endsection

@section('js')

@endsection
