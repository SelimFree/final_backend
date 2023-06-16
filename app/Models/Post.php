<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'title',
        'abstract',
        'content',
        'posted',
    ];

    public function categories()
    {
        return $this->hasMany(PostCate::class, 'postId', 'id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'postId', 'id');
    }
}
