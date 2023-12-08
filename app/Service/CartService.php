<?php

namespace App\Service;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CartService
{
    public function getCart(): Cart
    {
        /** @var $cart Cart */
        $cart = Cart::query()
            ->with('items')
            ->where('userId', Auth::id())
            ->first();

        return $cart;
    }

    /**
     * Добавляет товар в корзину.
     * @param int $productId
     * @param int $totalCount
     * @return void
     */
    public function add(int $productId, int $totalCount): Cart
    {
        /** @var $product Product */
        $product = Product::query()
            ->where('id', $productId)
            ->first();

        if ($product === null) {
            throw new NotFoundHttpException('Товар не найден.');
        }

        /** @var $cart Cart */
        $cart = Cart::query()
            ->where('userId', Auth::id())
            ->first();

        $cartItem = CartItem::query()
            ->updateOrCreate([
                'cartId' => $cart->id,
                'productId' => $productId
            ], [
                'count' => $totalCount,
                'price' => $product->price
            ]);

        $cartItem->total = $totalCount * $product->price;
        $cartItem->saveQuietly();

        $this->calculate($cart);

        return $cart;
    }

    /**
     * Пересчитывает корзину.
     * @param Cart $cart
     * @return void
     */
    protected function calculate(Cart $cart)
    {
        $cart->count = 0;
        $cart->total = 0;

        foreach ($cart->items as $item) {
            $cart->count += $item->count;
            $cart->total += $item->total;
        }

        $cart->saveQuietly();
    }
}
