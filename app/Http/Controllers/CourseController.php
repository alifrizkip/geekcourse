<?php

namespace App\Http\Controllers;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.index');
    }

    public function show($id)
    {
        return view('courses.show');
    }
}
