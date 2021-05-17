@extends('dashboard.layouts.dashboard-outside')

@section('title', 'Password reset e-mail')

@section('content')
    <table width="100%" background="{{ asset('images/mail/mail_background.png') }}">
        <tr>
            <td><h1 style="font-size: 3rem; line-height: 1; font-style: italic; font-family: 'Josefin Sans', sans-serif; color: #825550;">Password reset request</h1></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><p style="font-family: 'Josefin Sans', sans-serif; color: #825550;">Hi {{ $name }},</p></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><p style="font-family: 'Josefin Sans', sans-serif; color: #825550;">Someone quested a password reset for the account connected to this e-mail address.<br>If this was a mistake, please ignore this e-mail and nothing will happen.</p></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><p style="font-family: 'Josefin Sans', sans-serif; color: #825550;">To reset your password, visit the following link:<br><a class="underline block" href="{{ $url }}">Click here to change your password!</a></p></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><p style="font-family: 'Josefin Sans', sans-serif; color: #825550;">Or copy the following url into your browser:<br>{{ $url }}</p></td>
        </tr>
        <tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><p style="font-family: 'Josefin Sans', sans-serif; color: #825550;">Kind regards,<br>And-dreamers.com</p></td>
        </tr>
    </table>
@endsection

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,600;1,700&display=swap" rel="stylesheet" type="text/css" />
    <style>
        body {
            background-size: contain;
            background-image: url("{{ asset('images/mail/mail_background.png') }}");
            background-repeat: repeat-y no-repeat;
            width: 100%;
            height: 100%;
        }

        table {
            width: 100%;
            height: 100%;
            margin: 0;

            padding: 0;
        }
    </style>
@endsection
