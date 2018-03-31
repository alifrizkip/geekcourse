<?php

namespace App\Http\Controllers;

class MyCourseController extends Controller
{
    public function index()
    {
        return view('my-courses.index');
    }

    public function show($id)
    {
        return view('my-courses.show');
    }
}
