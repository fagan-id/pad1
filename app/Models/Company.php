<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'company';
    protected $primaryKey = 'id_company';

    public function company(){
        return $this->hasMany(Job::class);
    }
    public function getCompanyPictureAttribute($value)
    {
        return $value ?? 'assets\default-vacancy.jpg';
    }
}