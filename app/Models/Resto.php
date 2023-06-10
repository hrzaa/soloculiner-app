<?php

namespace App\Models;

use App\Models\Food;
use App\Models\User;
use App\Models\RestoGallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resto extends Model
{
    protected $fillable =[
        'resto_name', 'users_id', 'food_id', 'price','address', 'address_link', 'slug'
    ];

    use HasFactory;

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function resto_galleries(){
        return $this->hasMany(RestoGallery::class);
    }

     public function foods()
    {
       return $this->belongsToMany(Food::class, 'food_resto', 'resto_id', 'food_id');
    }

    //  public function galleries()
    // {
    //     return $this->hasMany(RestoGallery::class);
    // }


}
