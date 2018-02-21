<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessDetail extends Model
{
    protected $fillable = [
        'user_id',
        'financial_aid_id',
        'name_of_business',
        'business_type',
        'certificate_of_registration_number',
        'date_of_registration',
        'number_of_year_in_existence',
        'tax_identification_number',
        'nature_of_business',
        'business_address',
        'phone_number',
        'email_address',
        'number_of_staff',
        'owner_partner',
        'number_of_official_equipment_with_value_above_100000',
        'last_financial_year_turn_over',
        'last_financial_year_profit'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function financialAid()
    {
        return $this->belongsTo(FinancialAid::class);
    }


}
