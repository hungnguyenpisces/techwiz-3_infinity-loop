<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    public function appointment()
    {
        return $this->hasMany('App\Models\Appointment');
    }

    public function health()
    {
        return $this->hasMany('App\Models\HealthIndex');
    }

    public function checkout()
    {
        return $this->hasMany('App\Models\CheckOutHistory');
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function medicine()
    {
        return $this->hasMany('App\Models\MedicinePill');
    }

    public function blog()
    {
        return $this->hasMany('App\Models\Blog');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'address',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [
            'uid' => $this->id,
            'role' => $this->getRoleNames(),
            'username' => $this->username,
        ];
    }

    /**
     * Return the cancel rate (in decimals) of a user
     * 
     * @return float
     */
    public function cancelRate()
    {
        $cancelled=Appointment::where("user_id",$this->id)->where("status","Cancelled")->count();
        $total=Appointment::where("user_id",$this->id)->count();
        if ($total==0) return 0;
        return $cancelled*100/$total;
    }
}
