<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function hospitalDepartment()
    {
        return $this->belongsToMany(Hospital::class, 'hospital_department');
    }
}
