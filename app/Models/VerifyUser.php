<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    protected $fillable = ['user_id', 'token'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function store($user_id)
    {
        return static::create([
            'user_id' => $user_id,
            'token' => str_random(40)
        ]);
    }
}
