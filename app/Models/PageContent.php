<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageContent extends Model
{
    use HasFactory;

    protected $fillable = ['page_name','key','content','attachment'];

    protected static function newFactory()
    {
        return \Database\factories\PageContentFactory::new();
    }
}
