<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;
}

class Produto extends Model
    {
        public function categoria(){
        return $this->belongsTo(categoria::class);
        }
    };