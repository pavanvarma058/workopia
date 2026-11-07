@extends('layout')

@section('title')
    Workopia | Find and List jobs
@endsection
@section('content')
    <h1>Available Jobs</h1>
    {{-- @if (!empty($jobs)) 
        <ul>
            @foreach ($jobs as $job)
            <li>{{ $job }}</li>
            @endforeach
            
            <?php
            foreach ($jobs as $job) {
                echo '<li>' . htmlspecialchars($job, ENT_QUOTES, 'UTF-8') . '</li>';
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
@endsection
