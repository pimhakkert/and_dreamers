@extends('website.layouts.email')

@section('title', 'Backup created!')

@section('content')
    <table width="100%" background="{{ asset('images/mail/mail_background.png') }}">
        <tr>
            <td><p>Attached is the weekly backup for the database of the and.dreamers website. The images of the hat stories
                are not attached with this e-mail.</p></td>
        </tr>
        <tr>
            <td>&nbsp&nbsp</td>
        </tr>
        <tr>
            <td><p>Kind regards, <br/> And-dreamers.com</p></td>
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
    </style>
@endsection
