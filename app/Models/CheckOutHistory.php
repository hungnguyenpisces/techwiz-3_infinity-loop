<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckOutHistory extends Model
{
    use HasFactory;

    protected $table = 'check_out_histories';

    public function staff(){
        return $this->belongsTo('App\Models\Staff');
    }

    public function medicine(){
        return $this->hasMany('App\Models\MedicinePill');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function doctor(){
        return $this->belongsTo('App\Models\Doctor');
    }
}
