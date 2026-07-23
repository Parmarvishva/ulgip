<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubmission;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|min:2|max:100',
            'email'      => 'required|email|max:255',
            'phone'      => 'nullable|string|max:15|regex:/^[0-9+\-\s]+$/',
            'department' => 'nullable|string|max:100',
            'subject'    => 'required|string|min:5|max:200',
            'message'    => 'required|string|min:20|max:2000',
        ], [
            'name.required'    => 'Please enter your full name.',
            'email.required'   => 'A valid email address is required.',
            'email.email'      => 'Please enter a valid email address.',
            'subject.required' => 'Please provide a subject for your query.',
            'subject.min'      => 'Subject must be at least 5 characters.',
            'message.required' => 'Please enter your message.',
            'message.min'      => 'Message must be at least 20 characters.',
            'phone.regex'      => 'Please enter a valid phone number.',
        ]);

        ContactSubmission::create([
            'name'       => $validated['name'],
            'email'      => $validated['email'],
            'phone'      => $validated['phone'] ?? null,
            'department' => $validated['department'] ?? null,
            'subject'    => $validated['subject'],
            'message'    => $validated['message'],
            'ip_address' => $request->ip(),
        ]);

        return redirect()->route('contact')->with('success', 'Your message has been submitted successfully. Our team will respond within 24-48 working hours.');
    }
}
