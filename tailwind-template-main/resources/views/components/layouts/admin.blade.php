<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Dashboard Admin Diskominfo SP Surakarta' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">
    @include('partials.dashboard.sidebar')

    <div class="min-h-screen pl-64">
        @include('partials.dashboard.header')

        <main class="min-h-[calc(100vh-80px)]">
            {{ $slot }}
        </main>

        @include('partials.dashboard.footer')
    </div>
</body>
</html>