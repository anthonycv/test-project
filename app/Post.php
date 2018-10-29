<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // white list of fields
    protected $fillable = ['title', 'body'];

    // Black list of fields
    protected $guarded = ['user_id'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
        
    }
}
