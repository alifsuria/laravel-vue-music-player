<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class LoginController extends Controller
{
   public function login(Request $request)
   {
      $request->validate([
         "email" => ["required"],
         "password" => ["required"],
      ]);

      if (!Auth::attempt($request->only("email", "password"))) {
         return response([
            "status" => "error",
            "message" => "These credentials do not match our records.",
            "data" => []
         ], Response::HTTP_UNAUTHORIZED);
      }

      $user = Auth::user();
      $token = $user->createToken(Str::random(100))->plainTextToken;

      $cookie = cookie("jwt", $token, 60 * 24);

      return response([
         "status" => "success",
         "message" => "",
         "data" => [
            "user" => $user
         ]
      ])->withCookie($cookie);
   }

   public function getUser()
   {
      return response([
         "status" => "success",
         "message" => "",
         "data" => [
            "user" => Auth::user()
         ]
      ], Auth::user() == null ? Response::HTTP_UNAUTHORIZED : Response::HTTP_OK);
   }

   public function logout(Request $request)
   {
      $request->user()->currentAccessToken()->delete();
      $cookie = Cookie::forget("jwt");

      return response([
         "status" => "success",
         "message" => "",
         "data" => []
      ])->withCookie($cookie);
   }
}
