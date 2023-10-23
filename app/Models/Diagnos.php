<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnos extends Model
{
    use HasFactory;
    protected $fillable = [
       'type',
       'des',
       'status',
       'user_id',
       'patient_id',
    ];
    public function user() 
    {
        return $this->belongsTo(User::class);
    } 
    public function patients() 
    {
        return $this->belongsTo(Patients::class);
    } 
    public function diagnoses()
    {
        return $this->hasMany(Diagnos::class);
    }
    
}
