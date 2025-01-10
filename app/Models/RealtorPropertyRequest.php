<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Property;

class RealtorPropertyRequest extends Model
{
    use HasFactory;

    protected $fillable = ['realtor_id','request_datetime','name','phone','email','message','property_id'];

    protected static function newFactory()
    {
        return \Database\factories\RealtorPropertyRequestFactory::new();
    }

    public function property_rel(){
        return $this->belongsTo(Property::class,'property_id');
    }

    public function realtor_rel(){
        return $this->belongsTo(User::class,'realtor_id');
    }
}
