<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Thread;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $post)
    {
        $reply = $post->threads()->create([
            'body' => $request->body,
            'user_id' => 1, //auth()->id() // 現在のユーザーID
        ]);

        return response()->json($reply, 201);
    }
}
