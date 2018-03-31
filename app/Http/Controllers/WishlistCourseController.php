<?php

namespace App\Http\Controllers;

class WishlistCourseController extends Controller
{
    public function index()
    {
        return view('my-courses.wishlist');
    }
}
