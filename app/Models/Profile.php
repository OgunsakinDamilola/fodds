<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['first_name', 'last_name', 'middle_name', 'phone', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function store($data, $user_id)
    {
        return static::updateOrCreate(
            ['user_id' => $user_id],
            [
                'first_name' => array_get($data, "first_name"),
                'last_name' => array_get($data, "last_name"),
                'middle_name' => array_get($data, "middle_name"),
                'phone' => array_get($data, "phone"),
            ]);
    }
}
