<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

/*class ApiAuthController extends Controller
{
    use HasApiTokens;

    public function generateToken(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('token-name');

            return response()->json(['token' => $token->plainTextToken]);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }
}*/