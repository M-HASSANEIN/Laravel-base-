{{-- this is when we use alias in folder config app.php =aliases --}}
@if (!Route::is('about'))
    {{-- without alias --}}
    {{-- @if (!Illuminate\Support\Facades\Route::is('about')) --}}

    <footer>
        <p>&copy; {{ date('Y') }} &middot; <a href="{{ route('about') }}">About us to me</a></p>
    </footer>
@endif
