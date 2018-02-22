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

    public static function store($user_id)
    {
        return static::create([
            'user_id' => $user_id
        ]);
    }

    public static function updateFinancialAid($user_id, $data)
    {
        $financial_aid = static::where('user_id', '=', $user_id)->get()->lastest();
        if ($financial_aid) {
            return static::update([
                'id' => $financial_aid->id,
                'user_id' => $user_id,
                'financial_aid_type_id' => array_get($data, "financial_aid_type_id"),
                'amount_requested' => array_get($data, "amount_requested"),
                'term' => array_get($data, "term"),
                'purpose_of_financing' => array_get($data, "purpose_of_financing")
            ]);
        }
        return false;
    }
}
