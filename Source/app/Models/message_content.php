<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message_content extends Model
{
    use HasFactory;
    protected $fillable = [
        'content_id',
        'content',
        'msg_type',
        
    ];
}


