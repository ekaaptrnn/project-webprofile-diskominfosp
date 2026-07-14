<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('partials.front.styles')

        <title>{{ $title ?? 'Dashboard Admin Diskominfo SP Surakarta' }}</title>

        @vite('resources/css/app.css')
    </head>
    <body>
        @include('partials.dashboard.sidebar')
        @include('partials.dashboard.header')
            @if(isset($slot))
                <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen" id="main-content">
                    {{ $slot }}
                    @include('partials.dashboard.footer')
                </div>
            @endif
        @include('partials.front.scripts')
    </body>
</html>
