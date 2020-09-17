<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = ['contributor', 'message'];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
