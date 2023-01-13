<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $fillable = [
        'F_Name',
        'L_Name',
        'Address',
        'Email',
        'Phone',
        'NIC',
        'image_id',
        ];
}
