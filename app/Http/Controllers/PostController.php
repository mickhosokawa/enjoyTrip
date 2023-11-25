<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    protected $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::get();

        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request): RedirectResponse
    {
        // バリデーション済みデータの取得
        $validated = $request->validated();
        
        if ($request->hasFile('image_path')) {
            // ファイルの保存とパスの取得
            $path = $request->file('image_path')->store('images', 'public');
        } else {
            $path = null;
        } 

        $store = Post::create([
            'user_id' => 1,//$this->user->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'body' => $request->body,
            'address' => $request->address,
            'facility' => $request->facility,
            'season' => $request->season,
            'image_path' => $path ? $path : null,
            'created_by' => 1,//$this->user->id,
            'updated_by' => 1,//$this->user->id,
        ]);

        return redirect()->route('top.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $post = Post::with('threads.user')->find($id);
        $threads = $post->threads;
        $userIds = $post->threads->pluck('user_id')->unique();
        $answerUsers = User::whereIn('id', $userIds)->get();
        //dd($threads);

        return view('post.detail', compact('post', 'threads', 'answerUsers', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
