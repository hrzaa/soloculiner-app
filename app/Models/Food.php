<?php

namespace App\Models;

use App\Models\User;
use App\Models\Resto;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'food_name', 'users_id', 'food_history', 'food_desc','categories_id', 'slug'
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
}
