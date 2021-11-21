@extends('layout_front')
@section('title', 'ABOUT-PAGE')


@section('content')
    <div>
        <h1>about us </h1>
        <img src="{{ asset('images/default-thumbnail.jpg') }}" alt="test-img">
        <div>
            <a href="/">Back</a>
        </div>

    </div>
    {{-- you can use stop instead of @endsection --}}
@stop
