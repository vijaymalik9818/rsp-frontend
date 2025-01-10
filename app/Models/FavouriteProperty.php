<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Entities\Property;

class FavouriteProperty extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','property_id'];

    protected static function newFactory()
    {
        return \Database\factories\FavouritePropertyFactory::new();
    }

    public function property(){
        return $this->belongsTo(Property::class,'property_id','id');
    }
}
