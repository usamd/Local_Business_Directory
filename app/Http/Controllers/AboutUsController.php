<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function AboutUsIndex()
    {
        return view('about_us');
    }
}
