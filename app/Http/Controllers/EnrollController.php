<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollController extends Controller
{
    /**
     * Display the enrollment page.
     */
    public function index()
    {
        return view('pages.Enroll.Enroll');
    }

    /**
     * Handle online application submission.
     */
    public function submitApplication(Request $request)
    {
        // Validation rules
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'program' => 'required|string',
            'qualification' => 'required|string|max:255',
            'completionYear' => 'nullable|string|max:4',
            'paymentRef' => 'nullable|string|max:100',
            'additionalInfo' => 'nullable|string',
            'terms' => 'required|accepted'
        ]);

        // In production, save to database and send email
        // For now, redirect back with success message
        
        return redirect()->back()->with('success', 'Your application has been submitted successfully! We will contact you within 7-14 business days.');
    }
}