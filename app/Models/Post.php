<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'post_id';
    protected $fillable = ['title', 'category', 'content', 'published_at', 'tag'];
}
