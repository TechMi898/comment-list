<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        
        return view('comments.index', [
            'comments' => $comments,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでcomments/create にアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        $comment = new Comment;
        
        return view('comments.create', [
            'comment' => $comment,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // post で comments/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->content = $request->content;
        $comment->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // get で comments/id にアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        $comment = Comment::find($id);
        
        return view('comments.show', [
            'comment' => $comment,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // get で comments/id/edit へアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $comment = Comment::find($id);
        
        return view('comments.edit', [
            'comment' => $comment,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // put(patch) で comments/id へアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->content = $request->content;
        $comment->save();
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // delete で comments/id へアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        
        return redirect('/');
    }
}
