<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collateral extends Model
{
    protected $fillable = ['name'];

    public static function getCollaterals()
    {
        return static::pluck('name', 'id')->toArray();
    }
}
