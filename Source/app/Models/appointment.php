<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    public function getPatient()
    {
        return $this->hasOne(Patients::class,'id','patient_id');
        
    }
    protected $fillable = [
        'slot_id',
        'patient_id',
        'doctor_id',
        'appointment_status',
        'token_number',
        'created_at',

    ];

}

