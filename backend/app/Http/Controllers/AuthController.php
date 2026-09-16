<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Username and password are required.', 'errors' => $validator->errors()], 422);
        }

        if ($request->input('username') !== 'pharmacist' || $request->input('password') !== 'med123') {
            return response()->json(['message' => 'Invalid username or password.'], 401);
        }

        return response()->json([
            'message' => 'Login successful.',
            'user' => ['username' => 'pharmacist'],
        ]);
    }
}
