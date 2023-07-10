<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique("users", "email")
                    ->ignore(auth()->user()->id, "id")
            ],
        ]);

        $user = User::where("id", auth()->user()->id)
            ->first();

        if (!empty($user)) {
            $user->name = $request->input("name");
            $user->email = $request->input("email");
            $user->save();
        }

        return response([
            "status" => "success",
            "message" => "",
            "data" => [
                "user" => $user
            ]
        ]);
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $request->user()->currentAccessToken()->delete();
        $request->user()->delete();
        $cookie = Cookie::forget("jwt");

        return response([
            "status" => "success",
            "message" => "",
            "data" => []
        ])->withCookie($cookie);
    }
}
