<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'name';
    public $incrementing = false;

    protected $fillable = [
        'name',
    ];

    public function categories()
    {
        return $this->hasMany(PostCate::class, 'categoryName', 'name');
    }
}
