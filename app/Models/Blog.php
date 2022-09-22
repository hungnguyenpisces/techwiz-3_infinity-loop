<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public function image(){
        return $this->hasOne(Blog_thumbnail::class,"thumbnail_token","thumbnail_token");
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function blutack(){
        return $this->belongsToMany(Tag::class,"blu_tacks");
    }
}
