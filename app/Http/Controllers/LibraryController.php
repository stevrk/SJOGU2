<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
       public function index()
    {
        return view('pages.library_sec.library_index');
    }
}
