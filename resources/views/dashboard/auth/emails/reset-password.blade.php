@extends('dashboard.layouts.dashboard-outside')

@section('title', 'Password reset e-mail')

@section('content')
    <table id="email" class="ml-4 mt-14">
        <tr>
            <td><h1 class="italic text-brown text-5xl">Password reset request</h1></td>
        </tr>
        <tr>
            <td><p class="mt-10">Hi {{ $name }},</p></td>
        </tr>
        <tr>
            <td><p>Someone quested a password reset for the account connected to this e-mail address.<br>If this was a mistake, please ignore this e-mail and nothing will happen.</p></td>
        </tr>
        <tr>
            <td><p>To reset your password, visit the following link:<br><a class="underline block" href="{{ $url }}">Click here to change your password!</a></p></td>
        </tr>
        <tr>
            <td><p class="mt-8">Or copy the following url into your browser:<br>{{ $url }}</p></td>
        </tr>
        <tr>
        <tr>
            <td><p class="mt-8">Kind regards,<br>And-dreamers.com</p></td>
        </tr>
    </table>
@endsection
