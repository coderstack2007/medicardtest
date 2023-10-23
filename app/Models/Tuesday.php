<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuesday extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
      public function doctor()
    {
        return $this->belongsTo(Doctors::class);
    }
    
   
    protected $fillable = [
        'doctor_id',
        'user_id',
        'patient_id',
        'slot',
        'booked'
    ];

 
}


