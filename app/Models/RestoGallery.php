<?php

namespace App\Models;

use App\Models\Resto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RestoGallery extends Model
{
    protected $fillable = [
        'photos', 'resto_id'
    ];

    use HasFactory;

    public function resto()
    {
        return $this->belongsTo(Resto::class);
    }
}
