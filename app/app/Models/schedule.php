<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['origin_island_id', 'destination_island_id', 'ship_name', 'ship_type', 'departure_time', 'price', 'status', 'notes'];

    public function origin()
    {
        return $this->belongsTo(Island::class, 'origin_island_id');
    }

    public function destination()
    {
        return $this->belongsTo(Island::class, 'destination_island_id');
    }
}