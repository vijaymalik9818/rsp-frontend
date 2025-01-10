<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id ',
        'display_name',
        'phone',
        'i_am',
        'birth_year',
        'gender',
        'marital_status',
        'province',
        'city',
        'country',
        'home_phone',
        'mobile_number',
        'communication_lang',
        'send_me_updates',
        'send_confirm',
        'add_my_notes',
    ];

    protected static function newFactory()
    {
        return \Database\factories\UserProfileFactory::new();
    }
}
