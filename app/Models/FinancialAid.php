<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialAid extends Model
{
    protected $fillable = ['user_id', 'financial_aid_type_id', 'amount_requested', 'term', 'purpose_of_financing'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function financialAidType()
    {
        return $this->belongsTo(FinancialAidType::class);
    }
}
