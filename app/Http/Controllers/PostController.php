<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all()->toArray();
        return $posts;
    }

    public function store(Request $request) {
        $post = new Post($request->all());
        $post->save();
        return response()->json('Post created!');
    }

    public function show($id) {
        $post = Post::find($id);
        return response()->json($post);
    }

    public function update($id, Request $request) {
        $post = Post::find($id);
        $post->update($request->all());
        return response()->json('Post updated!');
    }
    
    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();
        return response()->json('Post deleted!');
    }
}
