<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialAidType extends Model
{
    protected $fillable = ['name'];

    public static function getFinancialAidTypes()
    {
        return static::pluck('name', 'id')->toArray();
    }
}
