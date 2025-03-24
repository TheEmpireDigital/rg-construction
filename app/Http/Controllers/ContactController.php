<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service_type' => 'required|string|max:255',
            'other_service' => 'required_if:service_type,other|nullable|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('mugopower@gmail.com')->send(new ContactFormMail($validated));
            return back()->with('success', 'Thank you for your message. We will get back to you shortly!');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an error sending your message. Please try again later.')
                        ->withInput();
        }
    }
} 