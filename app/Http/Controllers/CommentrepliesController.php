<?php

namespace App\Http\Controllers;

use App\Models\commentreplies;
use Illuminate\Http\Request;

class CommentrepliesController extends Controller
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
        'reply' => 'required|min:3',
        'comment_id' => 'required|integer',
    ]);

    // create a new comment reply
    $reply = new CommentReplies();
    $reply->user_id = $user_id;
    $reply->comment_id = $request->input('comment_id');
    $reply->reply = $request->input('reply');
    $reply->save();

    // redirect back to the motivation page
    return redirect()->back()->with('success', 'Comment reply added successfully');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\commentreplies  $commentreplies
     * @return \Illuminate\Http\Response
     */
    public function show(commentreplies $commentreplies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\commentreplies  $commentreplies
     * @return \Illuminate\Http\Response
     */
    public function edit(commentreplies $commentreplies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\commentreplies  $commentreplies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, commentreplies $commentreplies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\commentreplies  $commentreplies
     * @return \Illuminate\Http\Response
     */
    public function destroy(commentreplies $commentreplies)
    {
        //
    }
}
