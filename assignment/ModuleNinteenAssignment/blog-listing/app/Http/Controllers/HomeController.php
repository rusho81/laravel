<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function page(Request $request) {
        return view('page.home');
    }

    function heroData(Request $request) {
        return DB::table('headers')->first();
    }
    function socialData(Request $request) {
        return DB::table('socials')->first();
    }
    function postData(Request $request) {
        return DB::table('blogs')->get();
    }
}
