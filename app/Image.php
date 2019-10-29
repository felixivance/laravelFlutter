<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=[
      'description', 'url','post_id', 'featured'
    ];
    public function post(){
        $this->belongsTo(Post::class);
    }
}
