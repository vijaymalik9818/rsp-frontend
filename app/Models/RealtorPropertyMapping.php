<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RealtorPropertyMapping extends Model
{
    use HasFactory;

    protected $fillable = ['realtor_id','property_id'];

    protected static function newFactory()
    {
        return \Database\factories\RealtorPropertyMappingFactory::new();
    }

    public function property(){
        return $this->belongsTo(Property::class,'property_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'realtor_id','id');
    }
}
