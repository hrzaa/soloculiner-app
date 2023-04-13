<?php

namespace App\Models;

use App\Models\Food;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resto extends Model
{
    protected $fillable =[
        'resto_name', 'users_id', 'food_id', 'price','slug'
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
}
