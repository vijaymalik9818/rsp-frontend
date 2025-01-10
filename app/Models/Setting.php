<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['key','value','type','description'];

    protected static function newFactory()
    {
        return \Database\factories\SettingFactory::new();
    }
}
