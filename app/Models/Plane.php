<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Plane extends Model
{
    protected $fillable = ['qty_passangers', 'class', 'brand_id'];

    public function classes($className = null)
    {
        $classes = [
            'economic' => 'Economica', 
            'luxury' => 'Luxo'
        ];
        
        if(!$className){
            return $classes;
        }
        
        return $classes[$className];
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function search($keySearch, $totalPage)
    {
        return $this->where('id', $keySearch)->
                    orwhere('qty_passangers', $keySearch)->
                    orwhere('class', $keySearch)->
                    paginate($totalPage);
    }
}
