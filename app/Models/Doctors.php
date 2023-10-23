<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Doctors extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'lastname',
        'phone',
        'gender',
        'department',
        'university',
        'date',
        'specialist',
        'nationalid',
        'designation',
        'user_id',
        'monday',

    ];

    public function users() 
    {
        return $this->belongsTo(User::class);
    }
    public function patients() 
    {
        return $this->belongsTo(Patients::class);
    }
    
    public function times()
    {
        return $this->hasMany(Time::class, 'doctor_id');
    }
    public function tuesdays()
    {
        return $this->hasMany(Tuesday::class, 'doctor_id');
    }
    public function wensdays()
    {
        return $this->hasMany(Wensday::class, 'doctor_id');
    }
    public function thursdays()
    {
        return $this->hasMany(Thursday::class, 'doctor_id');
    }
    public function fridays()
    {
        return $this->hasMany(Friday::class, 'doctor_id');
    }
    public function saturdays()
    {
        return $this->hasMany(Saturday::class, 'doctor_id');
    }
    
}
