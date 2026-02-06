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
        return $this->belongsTo(Route::class,'bus_id');
    }

    public function bus(){
        return $this->belongsTo(Bus::class,'id_route');
    }
    public function programes()
    {
    return $this->hasMany(Programe::class);
}

}
