<?php

namespace App\Observables;

use App\Models\Cart;
use App\Models\User;

class UserObservable
{
    public function created(User $user)
    {
        Cart::create([
            'userId' => $user->id
        ]);
    }
}
