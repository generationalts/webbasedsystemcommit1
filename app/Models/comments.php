<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $fillable = [
        'user_id', 'motivation_id', 'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function isLikedBy(User $user)
    {
        return $this->likes()->where('user_id', $user->id)->exists();
    }
    public function likes()
    {
        return $this->morphMany(like::class, 'likeable');
    }
    public function commentreplies()
    {
        return $this->hasMany(commentreplies::class, 'comment_id');
    }

    public function motivation()
    {
        return $this->belongsTo(Motivation::class);
    }


}
