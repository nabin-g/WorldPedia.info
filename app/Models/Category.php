<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'slug', 'order', 'status'];

    public function posts()
    {
        return $this->belongsToMany(Post::class)->orderBy('created_at', 'desc');
    }

    public function video()
    {
        return $this->belongsToMany(Video::class)->orderBy('created_at', 'desc');
    }
}
