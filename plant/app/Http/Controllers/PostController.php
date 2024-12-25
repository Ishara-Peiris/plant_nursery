<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('discussion.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create and save the post
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('discussion.create')->with('success', 'You successfully posted the discussion. Try another one.');

        // Redirect back to the forum page with a success message
        //return redirect()->route('forum')->with('success', 'Discussion post created successfully!');
    }

    public function index()
    {
        $posts = Post::all(); // Retrieve all posts from the database
        return view('.discussion.forum', compact('posts'));
    }
}
