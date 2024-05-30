<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Replie extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'chat_id', 'message'];

    public function chat(){
        return $this->belongsTo(Chat::class, 'chat_id');
    }
}
