<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Handle user login and issue API token.
     */
    public function login(Request $request)
    {
        // 1. Validate the incoming input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2. Locate the user by email
        $user = User::where('email', $request->email)->first();

        // 3. Verify user presence and evaluate password match
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid email or password.'
            ], 401);
        }

        // 4. Issue Sanctum text token
        $token = $user->createToken('auth_token')->plainTextToken;

        // 5. Respond to frontend with token + user dashboard profiles
        return response()->json([
            'success' => true,
            'message' => 'Logged in successfully',
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role ?? 'user' // Default fallback safety
            ]
        ], 200);
    }

    /**
     * Terminate session and destroy current active API token.
     */
    public function logout(Request $request)
    {
        // Revokes exclusively the specific token that authorized this current request
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully'
        ], 200);
    }
}