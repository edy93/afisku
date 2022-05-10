<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginRequest $request) {
        // Check email
        $admin = Admin::where('username', $request->username)->first();

        // Check password
        if(!$admin || !Hash::check($request->pass, $admin->pass)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $admin->createToken('myapptoken')->plainTextToken;

        $response = [
            'admin' => $admin,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
