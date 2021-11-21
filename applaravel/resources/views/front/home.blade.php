@extends('layout_front')
{{-- @section('title')
HOME-PAGE
@endsection --}}
@section('content')
    <div>
        <h1>hello from paris</h1>
        <img src="{{ asset('images/default-thumbnail.jpg') }}" alt="test-img">
        <p>It's currently {{ Date('H:i A') }}</p>

    </div>
@endsection
