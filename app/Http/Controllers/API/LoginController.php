<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login() {
        $credentials = request(['email', 'password']);
        $token = auth('api')->attempt($credentials);
        if (!$token) {
            //Opa, credencial não bate
            return response()->json(['error' => 'Não encontrado'], 401);
        }
        return response()->json([
            'token' => $token,
            'type' => 'bearer',
            'expires' => auth('api')->factory()->getTTL() * 60, // tempo de expiração
        ]);
    }
}
