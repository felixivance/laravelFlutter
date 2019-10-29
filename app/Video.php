<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable=[
        'title', 'url', 'post_id'
    ];
    public function post(){
        $this->belongsTo(Post::class);
    }
}
