<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
        protected $fillable = ['user_id','invoice_number', 'total_amount', 'status'];

        // Relasi One-to-Many ke tabel transaction_items
        public function items()
        {
            return $this->hasMany(TransactionItem::class);
        }
}
