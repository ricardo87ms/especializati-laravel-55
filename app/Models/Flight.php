<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'plane_id',
        'airport_origin_id',
        'airport_destination_id',
        'date',
        'time_duration',
        'hour_output',
        'arrival_time',
        'old_price',
        'price',
        'total_plots',
        'is_promotion',
        'image',
        'qty_stops',
        'description',
    ];

    public function newFlight($request)
    {
        /*
        $data = $request->all();
        $data['airport_origin_id'] = $request->origin;
        $data['airport_destination_id'] = $request->destination;
        //dd($data);
        */
        $data = $request->all();
        return $this->create($data);
    }
}
