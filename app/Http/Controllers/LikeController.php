<?php

namespace App\Http\Controllers;

use App\Models\like;
use Illuminate\Http\Request;
use App\Events\CommentLiked;

class LikeController extends Controller
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


    public function like($id, $type)
    {
        $likeable = $type::find($id);
        $like = $likeable->like()->create([
            'user_id' => auth()->user()->id
        ]);

        // Dispatch the CommentLiked event
        event(new CommentLiked($likeable->comment_id, auth()->user()->id));

        return response()->json(['like' => $like]);
    }

    public function unlike($id, $type)
    {
        $likeable = $type::find($id);
        $likeable->likes()->where([
            'user_id' => auth()->user()->id
        ])->delete();

        return response()->json(['message' => 'unliked']);
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
    public function store(Request $request)
    {
        $likeableType = $request->input('likeable_type');
        $likeableId = $request->input('likeable_id');
        $userId = auth()->id();

        $existingLike = Like::where('user_id', $userId)
            ->where('likeable_type', $likeableType)
            ->where('likeable_id', $likeableId)
            ->first();

        if ($existingLike) {
            $existingLike->delete();
            $likeCount = Like::where('likeable_type', $likeableType)
                ->where('likeable_id', $likeableId)
                ->count();
            return response()->json(['liked' => false, 'likeCount' => $likeCount]);
        }

        $like = new Like();
        $like->user_id = $userId;
        $like->likeable_id = $likeableId;
        $like->likeable_type = $likeableType;
        $like->save();

        $likeCount = Like::where('likeable_type', $likeableType)
            ->where('likeable_id', $likeableId)
            ->count();
        return response()->json(['liked' => true, 'likeCount' => $likeCount]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(like $like)
    {
        //
    }
}
