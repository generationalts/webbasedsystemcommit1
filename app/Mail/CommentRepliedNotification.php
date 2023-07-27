<?php

namespace App\Mail;

use App\Models\Comment;
use App\Models\CommentReplies;
use App\Models\comments;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentRepliedNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $comment;
    public $reply;

    /**
     * Create a new message instance.
     *
     * @param Comment $comment
     * @param CommentReplies $reply
     */
    public function __construct(comments $comment, CommentReplies $reply)
    {
        $this->comment = $comment;
        $this->reply = $reply;
    }

    // rest of the class implementation
}

