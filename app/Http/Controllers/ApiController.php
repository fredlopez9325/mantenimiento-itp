<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infraestructura;
use App\Correctivo;
use App\Mantenimiento;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use Carbon\Carbon;

class ApiController extends Controller
{

    public function inbox()
    {
        $inbox = [];

        $solicitudes = Correctivo::where('role', \Auth::user()->role)
                    ->with('user')
                    ->orderBy('id', 'desc')
                    ->get();

        return response()
            ->json($solicitudes);
    }

    public function user()
    {
        $user = \Auth::user();
        return response()
                ->json($user);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            //'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Email o contraseña incorrecta.'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' =>
            'Cerraste sesión correctamente']
        );
    }
}
