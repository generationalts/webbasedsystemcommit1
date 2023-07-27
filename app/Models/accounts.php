<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
protected $fillable = [
    'email',
    'contact',
    'name',
    'activity',
    'contributionAmount',
    'status',
    'date',

];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
