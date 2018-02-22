<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = ['name'];

    public static function getBanks()
    {
        return static::pluck('name', 'id')->toArray();
    }

}
