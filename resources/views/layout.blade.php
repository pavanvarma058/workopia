<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Workopia | Find and List jobs' }}</title>
</head>

<body class="bg-gray-100">
    <x-header />
    <main class="container mx-auto p-4 mt-4">
        {{ $slot }}
    </main>
</body>

</html>
