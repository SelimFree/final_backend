<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory, Notifiable;
    
    protected $table = 'users';
    protected $primaryKey = 'name';
    public $timestamps = false;

    protected $fillable = [
        'email',
        'hash',
    ];
}
