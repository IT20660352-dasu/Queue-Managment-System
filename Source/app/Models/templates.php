<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class templates extends Model
{
    use HasFactory;
    protected $fillable = [
        'MessageID',
        'Msg_Content',
        'media',
    ];
}
