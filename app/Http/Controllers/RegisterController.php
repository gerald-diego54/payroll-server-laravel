<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Resources\RegisterResource;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        $data = $request->only("email", "password", "name");
        $user = User::create($data);
        $token = $user->createToken("token")->plainTextToken;
        return (new RegisterResource($user))->additional(["token" => $token]);
    }
}
