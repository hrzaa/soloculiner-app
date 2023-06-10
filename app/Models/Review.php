<?php

namespace App\Models;

use App\Models\Food;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    protected $fillable = [
        'users_id', 'food_id','comment', 'photo', 'rating', 'is_aktif'
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
