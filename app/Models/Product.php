<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tags;

class Product extends Model
{
    //
    public $fillable = [
        "name",
        "description",
        "price",
        "image",
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tags::class);
    }
}

