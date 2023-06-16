<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $primaryKey = 'name';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'email',
        'hash',
    ];

    public function comment()
    {
        return $this->hasMany(Comment::class, 'userName', 'name');
    }
}
