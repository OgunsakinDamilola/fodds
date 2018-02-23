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

    protected $table = "k_y_cs";

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

    public static function store($data, $financial_aid_id,$dataImage)
    {
        foreach (array_get($data, "title") as $i => $datum) {
            $image = $dataImage->file('passport_photograph')[$i];
            $imageName = time().$image->getClientOriginalName();
            $image_path = 'images/aids-application/kyc_passports/'.$imageName;
            $image->move(public_path('images/aids-application/kyc_passports/'),$imageName);

            static::create([
                'user_id' => auth()->id(),
                'financial_aid_id' => $financial_aid_id,
                'title_id' => array_get($data, "title.$i"),
                'first_name' => array_get($data, "first_name.$i"),
                'last_name' => array_get($data, "last_name.$i"),
                'middle_name' => array_get($data, "middle_name.$i"),
                'address' => array_get($data, "address.$i"),
                'designation_id' => array_get($data, "designation.$i"),
                'date_of_birth' => array_get($data, "date_of_birth.$i"),
                'residential_address' => array_get($data, "residential_address.$i"),
                'tax_identification_number' => array_get($data, "tin.$i"),
                'phone' => array_get($data, "phone.$i"),
                'email' => array_get($data, "email.$i"),
                'identity_type_id' => array_get($data, "id_type.$i"),
                'identity_number' => array_get($data, "id_number.$i"),
                'issue_date' => array_get($data, "id_issue_date.$i"),
                'expiry_date' => array_get($data, "id_expiry_date.$i"),
                'passport_photo_path' => $image_path,
            ]);
        }
    }
}
