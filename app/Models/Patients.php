<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Patients extends Model
{
    use HasFactory;
    protected $fillable = [      
    'username',
    'phone', 
    'address',
    'blood',
    'bloods',
    'gender',
    'date',
    'height',
    'weight',
    'nationality',
    'factor',
    'user_id',
];
// protected $primaryKey = 'id';
// protected $guarded = []; // YOLO
// protected static function boot() {
//     parent::boot();
//     static::creating(function ($patient) {
//         $patient->{$patient->getKeyName()} = (string) Str::uuid();
//     });
// }
// public function getIncrementing() {
//     return false;
// }
// public function getKeyType() {
//     return 'string';
// }

public function user()
{
    return $this->belongsTo(User::class);
}
public function diagnoses()
{
    return $this->hasMany(Diagnos::class, 'patient_id');
}
public function resepts()
{
    return $this->hasMany(Resept::class, 'patient_id');
}
public function times()
{
    return $this->hasMany(Time::class, 'patient_id');
}
public function doctors()
{
    return $this->hasOne(Doctors::class);
}
}
