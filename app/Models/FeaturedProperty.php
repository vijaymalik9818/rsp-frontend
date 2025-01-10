<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FeaturedProperty extends Model
{
    use HasFactory;

    protected $fillable = ['property_id'];

    protected static function newFactory()
    {
        return \Database\factories\FeaturedPropertyFactory::new();
    }

    public function property(){
        return $this->belongsTo(Property::class,'property_id');
    }
}
