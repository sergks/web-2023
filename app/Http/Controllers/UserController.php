<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $values = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($values)) {
            throw new UnprocessableEntityHttpException('Неверный логин или пароль.');
        }

        /** @var $user User */
        $user = Auth::user();

        return [
            'token' => $user->createToken('API')->plainTextToken
        ];
    }

    public function logout()
    {
        /** @var $user User */
        $user = Auth::user();
        $user->tokens()->delete();
    }
}
