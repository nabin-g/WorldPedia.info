<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $guarded = ['id'];

    protected function video()
    {
        return $this->belongsToMany(Category::class);
    }
}
