<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'Title',
        'Abstract',
        'Content',
        'Posted',
    ];
}
