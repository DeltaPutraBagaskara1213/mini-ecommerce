<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
        protected $fillable = ['transaction_id', 'product_id', 'quantity', 'price'];

        // Relasi balikan ke tabel transactions
        public function transaction()
        {
            return $this->belongsTo(Transaction::class);
        }

        // Relasi balikan ke tabel products
        public function product()
        {
            return $this->belongsTo(Product::class);
        }
    }
