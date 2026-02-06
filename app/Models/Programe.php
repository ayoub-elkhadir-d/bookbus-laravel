<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programe extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_depart',
        'date_arrivee',
        'segment_id',
    ];
    
    public function segment()
{
    return $this->belongsTo(Segment::class);
}

    
}
