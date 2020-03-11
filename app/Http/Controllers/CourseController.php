<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function addCourse(Course $course)
    {
        die(json_encode($course));
    }
}
