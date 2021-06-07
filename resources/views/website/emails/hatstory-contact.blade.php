@extends('website.layouts.website')

@section('title', 'Hatstory contact')

@section('content')
    <table width="100%" background="{{ asset('images/mail/mail_background.png') }}">
        <tr>
            <td><p>Someone filled in the contact form for a hat story. The details are as follows:</p></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Hat story name: {{ $hatStory->hat_name }}</li>
                    <li>Visitor name: {{ $request->request->get('name') }}</li>
                    <li>Visitor phone number: {{ $request->request->get('phone_number') }}</li>
                    <li>Visitor would like to {{ $request->request->get('type') }} the hat.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><p>Here is the message the visitor wrote:</p></td>
        </tr>
        <tr>
            <td>&nbsp&nbsp</td>
        </tr>
        <tr>
            <td><p>"{{ $request->request->get('message') }}"</p></td>
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

        table {
            width: 100%;
            height: 100%;
            margin: 0;

            padding: 0;
        }
    </style>
@endsection
