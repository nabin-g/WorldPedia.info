<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'infos';
    protected $fillable = ['address', 'branch', 'logo', 'email', 'phone', 'social'];
    public $timestamps = false;

    public function getSocialAttribute($value)
    {
        return json_decode($value);
    }
}
