<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bigyapan extends Model
{
    protected $table = 'bigyapans';
    protected $fillable = ['image', 'page', 'position', 'url', 'status'];
}
