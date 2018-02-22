<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable = ['name'];

    public static function getDesignations()
    {
        return static::pluck('name', 'id')->toArray();
    }
}
