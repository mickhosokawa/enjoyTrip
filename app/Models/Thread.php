<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Thread extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Thread が属する User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Thread が属する Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
