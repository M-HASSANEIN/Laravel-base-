@extends('layouts.layout_front' ,['title' => "MENU-PAGE"])
{{-- @section('title', 'Menu - ' . env('APP_NAME')) --}}

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
