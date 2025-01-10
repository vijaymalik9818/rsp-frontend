<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SellSubscriber extends Model
{
    use HasFactory;

    protected $fillable = ['email','address'];

    protected static function newFactory()
    {
        return \Database\factories\SellSubscriberFactory::new();
    }
}
