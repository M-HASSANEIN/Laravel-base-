{{-- head --}}
@include('layouts.partials.head_front')
{{-- end head --}}

<body>
    {{-- HEADER --}}
    @include('layouts.partials.header_front')
    {{-- END-HEADER --}}

    {{-- CONTENT --}}
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
        <div>{{ tiko($tiko ?? null) }}</div>
        <div></div>
        <div></div>
    </main>
    {{-- END-CONTENT --}}

    {{-- FOOTER --}}
    @include('layouts.partials.footer_front')
    {{-- END-FOOTER --}}
</body>

</html>
