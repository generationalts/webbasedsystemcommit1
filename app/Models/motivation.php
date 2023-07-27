<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motivation extends Model
{
    protected $fillable = [
        'image', 'verse', 'encouragement'
    ];
    public function comments()
{
    return $this->hasMany(comments::class, 'motivation_id');
}

}
