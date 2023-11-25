<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Thread;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReplyRequest;
use Exception;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReplyRequest $request, string $id)
    {
        
        try {

            $user = Auth::user();
            
            if(!$user) {
                throw new Exception('User is not logged in');
            }

            $reply = Thread::create([
                'user_id' => $user->id,
                'post_id' => $id,
                'reply' => $request->reply,
            ]);

            // return response()->json($reply, 201);
            return redirect()->back()->with(['success' => 'added reply']);
        
        } catch(Exception $e) {
            throw $e;
        }

    }
}
