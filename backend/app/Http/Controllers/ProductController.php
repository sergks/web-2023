<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function list(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Audi A6',
                'price' => 10000000
            ],
            [
                'id' => 2,
                'name' => 'Audi A7',
                'price' => 20000000
            ]
        ];
    }

    public function info($id): array
    {
        return [
            'id' => $id,
            'name' => 'Audi A6',
            'price' => 10000000
        ];
    }
}
