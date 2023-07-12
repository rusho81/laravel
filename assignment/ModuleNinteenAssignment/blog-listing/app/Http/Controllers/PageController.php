<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function testData($id) {
        return Blog::with('comments')->find($id);
    }
    function singleData($id) {
        $singlePost = Blog::with('comments')->find($id);
        return view('page.single',['single' => $singlePost]);
    }
}
