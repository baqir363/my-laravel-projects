<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        $courses = \App\Models\Course::latest()->limit(4)->get();
        return view('welcome', compact('courses'));
    }
}
