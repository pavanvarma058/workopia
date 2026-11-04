<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    {{-- @if (!empty($jobs)) 
        <ul>
            @foreach ($jobs as $job)
            <li>{{ $job }}</li>
            @endforeach
            
            <?php
                foreach ($jobs as $job) {
                    echo "<li>" . htmlspecialchars($job, ENT_QUOTES, 'UTF-8') . "</li>";
                    }
            ?>
        </ul>
    @else
        <p>No jobs available.</p>
    @endif --}}
    <ul>
        @forelse ($jobs as $job)
            <li>{{ $job }}</li>
        @empty
            <li>No jobs available.</li>
        @endforelse
    </ul>
</body>
</html>