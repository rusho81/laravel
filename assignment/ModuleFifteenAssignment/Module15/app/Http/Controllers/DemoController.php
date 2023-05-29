<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function AuthUser(Request $request) {
        return "Hello Users";
    }
    function UserSetting(Request $request) {
        return "Provide your setting here";
    }
}
