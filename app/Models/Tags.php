<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Tags extends Model
{
    //
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
