<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name'];

    public function search($key_search, $totalPage = 10)
    {
        return $this->where('name', 'LIKE', "%$key_search%")->paginate($totalPage);
    }

}
