<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    public function comment(){
        return $this->belongsToMany('App\Models\Comment');
    }

    public function department(){
        return $this->hasMany('App\Models\Department');
    }
}
