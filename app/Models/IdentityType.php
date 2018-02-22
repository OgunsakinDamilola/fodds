<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdentityType extends Model
{
    protected $fillable = ['name'];

    public static function getIdentityTypes()
    {
        return static::pluck('name', 'id')->toArray();
    }
}
