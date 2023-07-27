<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification extends Model
{

        protected $fillable = [
            'user_id', 'sender_id', 'message', 'is_read'
        ];

        public function user()
        {
            return $this->belongsTo(User::class);
        }
        public function sender()
        {
            return $this->belongsTo(User::class);
        }

    }


