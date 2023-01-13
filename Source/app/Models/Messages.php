<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\message_direction_lookups;

class Messages extends Model
{
    use HasFactory;

    public function getdirection()
    {
        return $this->hasOne(message_direction_lookups::class,'id','direction');
    }

    public function getUser()
    {
        return $this->hasOne(whatsapp_accounts::class,'phone_number','user_number');
    }
    public function getB()
    {
        return $this->hasOne(whatsapp_accounts::class,'phone_number','busuness_number');
    }

  protected $fillable = [
  'wam_id',
  'sent_time',
  'delivered_time',
  'read_time',
  'user_number',
  'busuness_number',
  'content_id',
  'direction',
    ];

}
