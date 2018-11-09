<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // white list of fields
    protected $fillable = ['comment', 'post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);

    }
}
