<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollateralInformation extends Model
{
    protected $fillable = ['user_id', 'financial_aid_id', 'collateral_id', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function financialAid()
    {
        return $this->belongsTo(FinancialAid::class);
    }
}
