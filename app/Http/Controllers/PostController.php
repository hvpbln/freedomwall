<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $count = Post::count() + 1;
        $anonymousName = "Anonymous User {$count}";

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        }

        Post::create([
            'content' => $request->content,
            'image_path' => $imagePath,
            'anonymous_name' => $anonymousName,
        ]);

        return redirect()->back()->with('success', 'Post submitted!');
    }
}