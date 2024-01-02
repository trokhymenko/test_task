<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory, Timestamp;

    protected $fillable = [
        'trip_id',
        'driver_id',
        'pickup',
        'dropoff'
    ];

    protected $casts = [
        'trip_id' => 'integer',
        'driver_id' => 'integer',
        'pickup' => 'datetime',
        'dropoff' => 'datetime'
    ];

    /**
     * @param $query
     * @param $search
     * @return mixed
     */
    public function scopeSearchDriver($query, $search)
    {
        if ($search) {
            return $query->where('driver_id', '=', $search);
        }

        return $query;
    }
}
