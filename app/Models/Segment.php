<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{

   protected $fillable = [
        'departure_city',
        'arrival_city',
        'tarif',
        'departure_time',
        'id_route',
        'bus_id'
    ];
    
    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
}
