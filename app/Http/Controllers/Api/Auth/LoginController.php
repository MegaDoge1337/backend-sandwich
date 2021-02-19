<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => 'login']);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }

        $tokenTimeLife = 60; // TTL = 1 hour

        $this->guard()->factory()->setTTL($tokenTimeLife);

        if (!$token = $this->guard()->attempt($validator->validated()))
        {
            return response()->json(['error' => 'Incorrect  credentials'], 401);
        }

        return response()->json(['message' => 'User authorized successfully'])
            ->cookie('token', $token);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return response()->json(['message' => 'User logged out successfully']);
    }

    public function refresh(Request $request)
    {
        return response()->json(['message' => 'Token refreshed successfully '])
            ->cookie('token', $this->guard()->refresh());
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
