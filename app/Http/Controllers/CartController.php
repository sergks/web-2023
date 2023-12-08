<?php

namespace App\Http\Controllers;

use App\Service\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function info(CartService $service)
    {
        return $service->getCart();
    }

    public function add(Request $request, CartService $service)
    {
        $values = $request->validate([
            'productId' => 'required|int',
            'count' => 'int|nullable|min:1'
        ]);

        return $service->add($values['productId'], $values['count'] ?? 1);
    }
}
