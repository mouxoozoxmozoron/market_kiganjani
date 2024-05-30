<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'item_id', 'message'];


    public function item(){
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function replies(){
        return $this->hasMany(Replie::class, 'chat_id');
    }
}
