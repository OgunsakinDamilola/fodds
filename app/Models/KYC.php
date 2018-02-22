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
        'tax_identification_number',
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

    public static function store($data, $financial_aid_id)
    {
        foreach ($data as $datum) {

            static::create([
                'user_id' => auth()->id(),
                'financial_aid_id' => $financial_aid_id,
                'title_id' => array_get($datum, "title_id"),
                'first_name' => array_get($datum, "first_name"),
                'last_name' => array_get($datum, "last_name"),
                'middle_name' => array_get($datum, "middle_name"),
                'address' => array_get($datum, "address"),
                'designation_id' => array_get($datum, "designation_id"),
                'date_of_birth' => array_get($datum, "date_of_birth"),
                'residential_address' => array_get($datum, "residential_address"),
                'tax_identification_number' => array_get($datum, "tax_identification_number"),
                'phone' => array_get($datum, "phone"),
                'email' => array_get($datum, "email"),
                'identity_type_id' => array_get($datum, "identity_type_id"),
                'identity_number' => array_get($datum, "identity_number"),
                'issue_date' => array_get($datum, "issue_date"),
                'expiry_date' => array_get($datum, "expiry_date"),
                'passport_photo_path' => array_get($datum, "passport_photo_path"),
            ]);
        }
    }
}
