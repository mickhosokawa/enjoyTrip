<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Thread;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {

        try {
            $reply = Thread::create([
                'user_id' => $this->user->id,
                'post_id' => $id,
                'reply' => $request->reply,
            ]);

            // return response()->json($reply, 201);
            return redirect()->back();
        
        } catch(Exception $e) {
            throw $e;
        }

    }
}
