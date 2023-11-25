<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    // POST送信がある時のみ、検索処理を実行
    if($request->isMethod('post')) {
        try {
            // 検索条件に応じてデータを取得（ここでは例として全ての投稿を取得）
            $posts = Post::with(['user', 'category'])->paginate(10);

            // JSONレスポンスを返す
            return response()->json([
                'posts' => $posts
            ]);
        } catch(QueryException $e) {
            // エラーの場合はエラーメッセージをJSONで返す
            return response()->json(['error' => $e->getMessage()], 500);
        }
    } else {
        // GETリクエストの場合は通常のビューを返す
        $posts = [];
        return view('top.index', compact('posts'));
    }
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
