<?php

namespace App\Models;

use App\Models\User;
use App\Models\Resto;
use App\Models\Category;
use App\Models\FoodGallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'users_id','categories_id','food_name', 'food_desc_id', 'food_history_id', 'food_desc_en', 'food_history_en',  'slug'
    ];

    use HasFactory;

    public function resto()
    {
        return $this->hasMany(Resto::class);
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }

    public function restos()
    {
        return $this->belongsToMany(Resto::class);
    }

    public function food_galleries()
    {
        return $this->hasMany(FoodGallery::class);
    }

   public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
