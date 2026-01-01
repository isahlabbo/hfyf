<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobOpeningController extends Controller
{
    public function index() {
        return view('jobs.index');
    }

    public function show($slug) {
        return view('jobs.show');
    }
}
