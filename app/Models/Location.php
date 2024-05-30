<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    //relation
    public function item()
    {
        return $this->hasOne(Item::class, 'location_id');
    }
}
