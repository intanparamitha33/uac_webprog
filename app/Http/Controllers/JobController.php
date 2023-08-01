<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function choose() {
        $jobs = Job::all();

        return view('register', compact('jobs'));
    }
}
