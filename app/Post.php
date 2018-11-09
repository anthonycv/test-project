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

    public function addComment($comment)
    {

        // Add a comment to a post

        $this->comments()->create(compact('comment'));

//        $this->comments()->create(['comment' => $body]);

//        Comment::create([
//
//            'comment' => $body,
//
//            'post_id' => $this->id
//
//        ]);

    }

}
