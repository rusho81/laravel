<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('category')->get();
        return view('index', ['posts' => $posts]);

    }

    function totalPost(int $id) {
        $totalPosts = Post::where('category_id', $id)->count();
        return "Total posts in category: " . $totalPosts;
    }

    function delatePost($id) {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        $post->delete();
        return response()->json(['message' => 'Post deleted successfully']);
    }
    function onlySoftDelete() {
        $softDel = Post::onlyTrashed()->get();
        return $softDel;
    }

    function all() {
        $posts = Post::with('category')->get();
        return $posts;

    }


    function postCategory($id) {
        $category = Category::findOrFail($id);
        $posts = $category->posts;
        return response()->json($posts);
    }

    function latestPost($id) {
        $category = Category::findOrFail($id);
        $latestPost = $category->posts()->latest()->first();
        return $latestPost;
    }

    function latestCat() {
        $categories = Category::all();
        return view('category', ['categories' => $categories]);
    }
}
