<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdministrativeTeam extends Model
{
    use HasFactory;

    protected $fillable = ['name','position','position_details','phone','email','facebook_link',
        'x_link','instagram_link','linkedin_link','about_content','image'];

    protected static function newFactory()
    {
        return \Database\factories\AdministrativeTeamFactory::new();
    }
}
