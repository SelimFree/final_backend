<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'Name';
    public $timestamps = false;

    protected $fillable = [
        'Email',
        'Hash',
    ];
}
