<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // relations
    public function item(){
        return $this->hasOne(Item::class, 'category_id');
    }
}
