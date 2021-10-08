<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = [
        'transactions_id',
        'products_id',
        'price',
        'shipping_status',
        'resi',
        'code_transaction'
      ];
     
    protected $hidden = [];

    public function products()
    {
      return $this->hasOne(Product::class, 'id', 'products_id');
    }

    public function transaction()
    {
      return $this->hasOne(Transaction::class, 'id', 'transactions_id');
    }

}
