<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    protected $fillable = [
        'userId',
        'count',
        'total'
    ];

    public function items()
    {
        return $this->hasMany(CartItem::class, 'cartId', 'id')
            ->with('product');
    }

    protected $casts = [
        'total' => 'double'
    ];
}
