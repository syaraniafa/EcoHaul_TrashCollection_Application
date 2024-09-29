<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recyclebank extends Model
{
    use HasFactory;

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
