<?php

namespace App\Http\Controllers;

use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    function comments(Request $request) {
        return Comment::insert($request->input());
    }
}
