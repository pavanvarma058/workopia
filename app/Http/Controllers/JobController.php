<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    public function index() : View
    {
        $title = 'Available Jobs';
        $jobs = [
            'Web Developer',
            'Database Admin',
            'Software Engineer',
            'Systems Analyst'
        ];
        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create() : View
    {
        return view('jobs.create');
    }

    public function show(string $id) : string
    {
        return "Job ID: $id";
    }

    public function store(Request $request) : string
    {
        $title = $request->input('title');
        $description = $request->input('description');

        return "Title: $title, Description: $description";
    }
}
