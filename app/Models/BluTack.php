<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BluTack extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function blutack(){
        return $this->belongsTo(Blog::class,"blog_id");
    }
}
