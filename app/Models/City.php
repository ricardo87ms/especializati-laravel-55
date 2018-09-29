<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\State;

class City extends Model
{
    
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
