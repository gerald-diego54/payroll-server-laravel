<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Resources\RegisterResource;
use App\Models\RegisterModel;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        $data = $request->only(
            "email",
            "password",
            "first_name",
            "last_name",
            "middle_name",
            "landline_number",
            "mobile_number",
            "company",
            "branch",
            "position",
            "leave_type",
        );
        $user = User::create($data);
        $token = $user->createToken("token")->plainTextToken;
        return (new RegisterResource($user))->additional(["token" => $token]);
    }
}
