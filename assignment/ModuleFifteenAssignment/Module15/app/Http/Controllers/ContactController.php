<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Firstly I validate the form request
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        // Then collect the infromation and store those in variables

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        
        $to = 'rushokazi@gmail.com';
        $subject = 'New Contact Form Submission';
        $body = "Name: $name\nEmail: $email\nMessage: $message";

        Mail::raw($body, function ($message) use ($to, $subject) {
            $message->to($to)
                    ->subject($subject);
        });
        return response()->json(['message' => 'Form submitted successfully']);
    }
}
