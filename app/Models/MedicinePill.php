<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinePill extends Model
{
    use HasFactory;
    protected $table  = 'medicine';

    public function checkout(){
        return $this->belongsTo('App\Models\CheckOutHistory');
    }
}