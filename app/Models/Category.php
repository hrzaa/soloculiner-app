<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name_id', 'name_en', 'photo', 'slug'
    ];
    use HasFactory;
}
