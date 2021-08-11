<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class AutheController extends Controller
{
    public function register(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        return response()->json($token, 201);
    }

    public function login(Request $request)
    {


        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($credentials)) {
            return $this->error('Credentials not match', 401);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken('myapptoken')->plainTextToken;
    }


    public function logout()
    {
        // $user->tokens()->where('id', $tokenId)->delete();

        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
