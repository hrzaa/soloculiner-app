<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodGallery extends Model
{
    protected $fillable = [
        'photos', 'food_id'
    ];

    use HasFactory;

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
