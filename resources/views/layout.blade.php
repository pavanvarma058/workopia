<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $title ?? 'Workopia | Find and List jobs' }}</title>
</head>

<body class="bg-gray-100">
    <x-header />
    @if (request()->is('/'))
        <x-hero />
        <x-top-banner />
    @endif
    <main class="container mx-auto p-4 mt-4">
        {{ $slot }}
        {{-- This is where the content of the page will be injected. The $slot variable is used in
        Blade components to represent the content that is passed into the component when it is used. In this case, it
        will display the content of the page that extends this layout. --}}
    </main>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
