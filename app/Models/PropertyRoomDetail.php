<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyRoomDetail extends Model
{
    use HasFactory;

    protected $fillable = ['property_numeric_key','description'];

    protected static function newFactory()
    {
        return \Database\factories\PropertyRoomDetailFactory::new();
    }

    public function getDescriptionAttribute($value){
        return collect(json_decode($value,true))->groupBy('RoomLevel');
    }
}
