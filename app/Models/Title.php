<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable = ['name'];

    public static function getTitles()
    {
        return static::pluck('name', 'id')->toArray();
    }
}
