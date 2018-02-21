<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferenceInformation extends Model
{
    protected $fillable = ['user_id', 'financial_aid_id', 'name', 'address', 'phone_number', 'email', 'profession', 'office_address'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function financialAid()
    {
        return $this->belongsTo(FinancialAid::class);
    }
}
