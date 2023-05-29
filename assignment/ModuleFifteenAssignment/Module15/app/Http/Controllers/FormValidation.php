<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidation extends Controller
{   
    // Task 1: Request Validation
    function validateForm(Request $request):string {
        $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        return response()->json(['message' => 'Form submitted successfully']);
    }

    // Task 2: Request Redirect
    function redirect1(Request $request):string {
        return redirect('/dashboard');
    }
    function redirect2(Request $request):string {
        return "Hello2";
    }
}
