<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventLocation extends Model
{
     protected $fillable = [
        'location', 'latitude', 'langtitude', 'event_id'
    ];

    use HasFactory;

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
