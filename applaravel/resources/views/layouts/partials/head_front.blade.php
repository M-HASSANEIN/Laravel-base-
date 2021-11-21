<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!-- Favicons -->
    <link href="{{ asset('images/logo.png') }}" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- <title>@yield('title' ,env('APP_NAME'))</title> --}}
    {{-- YOU CAN USE ONTHER SYNTAX --}}
    <title> {{ $title }}</title>
</head>
