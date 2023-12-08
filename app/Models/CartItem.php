<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'carts_items';

    protected $fillable = [
        'cartId',
        'count',
        'price',
        'total',
        'productId'
    ];

    protected $casts = [
        'price' => 'double',
        'total' => 'double'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'productId', 'id');
    }
}
