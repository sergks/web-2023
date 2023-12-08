<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends Controller
{
    public function top(): Collection
    {
        return Product::query()
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();
    }

    public function list(): Collection
    {
        return Product::query()
            ->get();
    }

    public function info($id): Model
    {
        $model = Product::query()
            ->where('id', $id)
            ->first();

        if ($model === null) {
            throw new NotFoundHttpException('Товар не найден.');
        }

        return $model;
    }

    public function create(Request $request): Model
    {
        $values = $request->validate([
            'name' => 'required|string|max:128',
            'image' => 'required',
            'price' => 'required|numeric|min:0'
        ]);

        return Product::create($values);
    }
}
