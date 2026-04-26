<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Show the about page
     */
    public function about()
    {
        return view('pages.About.About_page');
    }
}