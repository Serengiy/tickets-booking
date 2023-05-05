<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function places(){
        return $this->hasMany(Place::class, 'event_id');
    }

    public function occasion(){
        return $this->belongsTo(Occasion::class, 'occasion_id');
    }

}
