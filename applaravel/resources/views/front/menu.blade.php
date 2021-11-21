@extends('layout_front')
@section('title', 'menu ' . env('APP_NAME'))

@section('content')
    <div>
        <h1>menu</h1>
        <h1></h1>
        <DIV></DIV>
        <img src="{{ asset('images/default-thumbnail.jpg') }}" alt="test-img">
        <div>
            <a href="/">Back</a>
        </div>

    </div>

@endsection
