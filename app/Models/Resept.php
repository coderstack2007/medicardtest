<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resept extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'des',
        'prescribed',
        'medicine',
        'dosage',
        'user_id',
        'patient_id',
     ];
     public function users() 
     {
         return $this->belongsTo(User::class);
     } 
     public function patients()
     {
         return $this->belongsTo(Patients::class);
     }
}
