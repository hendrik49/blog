<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    //
    public function indextes() {       
        $query = Post::all();
        foreach ($query as $q) {
            echo "<li>{$q->title}</li>";
        }
    }

    public function index() {       
        $query = Post::all();
        return response()->json($query);
    }
    
    public function show(Post $post) {
        return $post;
    }
    public function store(Request $request) {
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }
    public function update(Request $request, Post $post) {
        $post->update($request->all());
        return response()->json($post);
    }
    public function delete(Post $post) {
        $post->delete();
        return response()->json(null, 204);
    }
}
