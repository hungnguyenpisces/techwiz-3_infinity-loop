<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthIndex extends Model
{
    use HasFactory;
    protected $table = 'health_indices';

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
