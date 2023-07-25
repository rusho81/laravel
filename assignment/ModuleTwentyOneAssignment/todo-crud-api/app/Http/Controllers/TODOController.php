<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;

use Illuminate\Http\Request;

class TODOController extends Controller
{
    function TodoCreate(Request $request) {
        $user_id = $request->header('id');
        return TodoItem::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'completed' => $request->input('completed'),
            'user_id' => $user_id
        ]);
    }

    function TodoList(Request $request) {
        $user_id = $request->header('id');
        return TodoItem::where('user_id', $user_id)->get();
    }

    function TodoDelete(Request $request) {
        $todo_id = $request->input('id');
        $user_id = $request->header('id');
        return TodoItem::where('id', $todo_id)
        ->where('user_id', $user_id)->delete();
    }

    function TodoUpdate(Request $request) {
        $todo_id = $request->input('id');
        $user_id = $request->header('id');
        return TodoItem::where('id', $todo_id)
        ->where('user_id', $user_id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'completed' => $request->input('completed'),
        ]);
    }
}
