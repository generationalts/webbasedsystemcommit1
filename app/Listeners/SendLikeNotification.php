<?php

namespace App\Listeners;

use App\Events\CommentLiked;
use App\Models\comments;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendLikeNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\CommentLiked  $event
     * @return void
     */
    public function handle(CommentLiked $event)
    {
        $comment = comments::findOrFail($event->commentId);
        $commentCreator = $comment->user;

        // Send email notification to the comment creator
        // Construct the email message and use Laravel's Mail facade
    }

}
