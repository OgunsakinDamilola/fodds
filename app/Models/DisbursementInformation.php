<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisbursementInformation extends Model
{
    protected $fillable = ['user_id', 'financial_aid_id', 'bank_id', 'account_number', 'bvn'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function financialAid()
    {
        return $this->belongsTo(FinancialAid::class);
    }

    public function bank(){
        return $this->belongsTo(Bank::class);
    }
}
