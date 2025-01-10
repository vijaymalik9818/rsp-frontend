<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OurProfessional extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','position','description','phone','email','license','language','property_id'];

    protected static function newFactory()
    {
        return \Database\factories\OurProfessionalFactory::new();
    }

    public function properties(){
        return $this->hasMany(Property::class,'list_agent_key_numeric','memberkeynumeric');
    }
}
