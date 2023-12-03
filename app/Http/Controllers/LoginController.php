<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\LoginResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $credentials = $request->only("email", "password");
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            /** @var \App\Models\User $user **/
            $token = $user->createToken("token")->plainTextToken;
            return (new LoginResource($user))->additional(["token" => $token]);
        }

        return response()->json(array("message" => "email or password is incorrect"), Response::HTTP_UNAUTHORIZED);
    }
}
