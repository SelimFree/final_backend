<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasFactory, Notifiable;

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
