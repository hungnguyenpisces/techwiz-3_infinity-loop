<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    public function comment()
    {
        return $this->belongsToMany(Comment::class);
    }

    public function departmentHospital()
    {
        return $this->belongsToMany(Department::class, 'hospital_department');
    }
}
