<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;


class login_controller extends Controller
{
    function login(Request $request){
        $user = new User;
        $user = User::all()->where('email',$request->input('email'))->first();
        if(!$user || !Hash::check($request->input('password'),$user->password)) {
            return response()->json([
                'message' => 'Credentials do not match'
            ], 400);
        }

        // $token = $user->createToken('UserToken')->plainTextToken;
        unset($user["Employee_ID"],$user["Job_ID"]);
        $response = [
            'User' => $user,
        ];

        return response()->json($response,200);
    }

    function register(Request $request) {
        // ?email=diya@123.com&password=christy&first_name=john&last_name=varkey&profile_image=google

        $user = new User;
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->profile_image = $request->input('profile_image');
        $user->user_status="Admin";
        if($user->save())
            return response()->json([
                'message' => 'Added New User'
            ], 200);
    }


}
