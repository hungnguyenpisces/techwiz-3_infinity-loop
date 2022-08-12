<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function appointment(){
        return $this->hasMany('App\Models\Appointment');
    }

    public function hospital(){
        return $this->belongsTo('App\Models\Hospital');
    }
}
