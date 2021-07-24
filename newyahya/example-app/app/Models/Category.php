<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
}
