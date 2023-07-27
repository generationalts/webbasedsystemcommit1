<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LikeNotificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $userName;
    public $comment;
    public $action;
    public $likeCount;

    /**
     * Create a new message instance.
     *
     * @param string $userName
     * @param string $comment
     * @param string $action
     * @param int $likeCount
     * @return void
     */
    public function __construct($userName, $comment, $action, $likeCount)
    {
        $this->userName = $userName;
        $this->comment = $comment;
        $this->action = $action;
        $this->likeCount = $likeCount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Notification: Comment Liked')
                    ->view('emails.like-notification');
    }
}

