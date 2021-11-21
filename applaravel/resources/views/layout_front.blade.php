<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>@yield('title' ,env('APP_NAME'))</title>
</head>

<body>
    <header>
        <a href="{{ route('menu') }}">MENU</a>
        <a href="{{ route('about') }}">ABOUT</a>
    </header>
    <main class="container">
        @yield('content')
        {{-- to access to any varaible in .env --}}
        <div>{{ env('APP_NAME') }}</div>
        {{-- to access to any varible in app.php --}}
        <div> {{ config('app.name') }}</div>
        {{-- to access to any varible in database.php --}}
        <div> {{ dump(config('project.name')) }}</div>
        <div> {{ dump(config('app.url')) }}</div>
        <div> {{ config('project.variable') }}</div>
        <div></div>
        <div></div>
        <div></div>
    </main>
    {{-- this is when we use alias in folder config app.php =aliases --}}
    @if (!Route::is('about'))
        {{-- without alias --}}
        {{-- @if (!Illuminate\Support\Facades\Route::is('about')) --}}

        <footer>
            <p>&copy; {{ date('Y') }} &middot; <a href="{{ route('about') }}">About us to me</a></p>
        </footer>
    @endif

</body>

</html>
