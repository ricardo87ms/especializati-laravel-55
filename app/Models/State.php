<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class State extends Model
{
    public function search($keySearch)
    {
        return $this->where('name', 'like', "%{$keySearch}%")
                    ->orWhere('initials', $keySearch)
                    ->get();
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function searchCities($keySearch, $totalPage)
    {
        return $this->cities()->where('name', 'like', "%$keySearch%")->paginate($totalPage);
    }
}
