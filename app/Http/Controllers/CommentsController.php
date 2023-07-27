<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\commentreplies;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $motivation_id, $user_id)
{
    // validate the input
    $validatedData = $request->validate([
        'comment' => 'required|min:3',
    ]);

    // create a new comment
    $comment = new Comments();
    $comment->motivation_id = $motivation_id;
    $comment->user_id = $user_id;
    $comment->comment = $request->input('comment');
    $comment->save();

    // create a new comment reply if the reply form was submitted
    if ($request->has('reply') && !empty($request->input('reply'))) {
        $reply = new Commentreplies();
        $reply->user_id = $user_id;
        $reply->comment_id = $request->input('comment_id');
        $reply->reply = $request->input('reply');
        $reply->save();
    }

    // redirect back to the motivation page
    return redirect()->back()->with('success', 'Comment added successfully');
}



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function show(comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function edit(comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy(comments $comments)
    {
        //
    }
}
