<?php

namespace App\Models;

use App\Models\User;
use App\Models\EventGallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'event_name', 'users_id', 'date_start', 'date_end', 'event_history', 'event_desc',  'address', 'latitude', 'longtitude', 'slug'
    ];
    
    use HasFactory;

    public function event_galleries(){
        return $this->hasMany(EventGallery::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'users_id');
    }


}
 