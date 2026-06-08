<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Kolom yang diizinkan untuk diisi (Mass Assignment)
        protected $fillable = ['name', 'description', 'price', 'stock'];
}
