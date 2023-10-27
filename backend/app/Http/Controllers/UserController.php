<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function createUser (Request $request) {

        try {
            $validatedData = $request->validate([
                'name'          => 'required|string|max:255',
                'email'         => 'required|string',
                'password'      => 'required|string',
            ]);
            $create = User::create($validatedData);

            return response()->json(['message' => 'User created successfully'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Bad request'], 400);
        }

    }

    public function getAllUsers(){
        return User::get();
    }


    public function auth(Request $request){

        $validatedData = $request->validate([
            'email'         => 'required|string',
            'password'      => 'required|string',
        ],[
            'email.required' => 'The E-mail is required',
            'password.required' => 'The password is required'
        ]);

        if(Auth::attempt(['email' => $request->email,'password' => $request->password]))
        {
            return response()->json(['message' => 'Login success'], 200);
        }
        else{
            return response()->json(['message' => 'Incorrect E-mail or password'], 404);
        }
    }
}
