<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show home screen
     */
    public function index()
    {
        $courses = Course::all();

        return view('home', compact('courses'));
    }
}
