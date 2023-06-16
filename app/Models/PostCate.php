<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCate extends Model
{
    use HasFactory;

    protected $fillable = [
        'postId',
        'categoryName',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'postId', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryName', 'name');
    }
}
