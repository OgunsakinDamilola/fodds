<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KYC extends Model
{
    protected $fillable = [
        'user_id',
        'financial_aid_id',
        'title_id',
        'first_name',
        'last_name',
        'middle_name',
        'address',
        'designation_id',
        'date_of_birth',
        'residential_address',
        'phone',
        'email',
        'identity_type_id',
        'identity_number',
        'issue_date',
        'expiry_date',
        'passport_photo_path'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function financialAid()
    {
        return $this->belongsTo(FinancialAid::class);
    }

    public function title()
    {
        return $this->belongsTo(Title::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function identityType()
    {
        return $this->belongsTo(IdentityType::class);
    }
}
