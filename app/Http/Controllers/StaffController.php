<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of all staff members.
     */
    public function index()
    {
        // Sample staff data - In production, this would come from a database
        $leadership = [
            [
                'name' => 'Dr. Charles Masulani Mwale',
                'title' => 'Vice Chancellor',
                'qualification' => 'PhD, MSc, BSc',
                'image' => 'VC.jpeg',
                'bio' => 'Leading the university with vision and excellence in higher education.',
                'email' => 'vc@sjogu.edu',
                'order' => 1
            ],
            [
                'name' => 'Dr. Esmie Mkwinda',
                'title' => 'Deputy Vice Chancellor',
                'qualification' => 'PhD',
                'image' => 'Registrar.jpeg',
                'bio' => 'Supporting the Vice Chancellor in academic and administrative leadership.',
                'email' => 'dvc@sjogu.edu',
                'order' => 2
            ],
            [
                'name' => 'Chimwemwe Munthali',
                'title' => 'Dean of Faculty',
                'qualification' => 'MSc',
                'image' => 'Dean.jpeg',
                'bio' => 'Overseeing academic programs and faculty development.',
                'email' => 'dean@sjogu.edu',
                'order' => 3
            ]
        ];

        return view('pages.staff.staff_page', compact('leadership'));
    }
}