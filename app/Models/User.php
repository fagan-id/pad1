<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'id_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'id_roles',
        'password',
        'google_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class,'id_roles','id_roles');
    }

    public function userDetails()
    {
        return $this->hasOne(UserDetails::class,'id_users','id_users');
    }

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class, 'id_users');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'id_users');
    }
}
