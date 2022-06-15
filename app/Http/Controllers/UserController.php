<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function store()
    {
        return view('pages.auth.register');
    }

    protected function storeProcess()
    {
        $validator = Validator::make(
            request()->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email|max:70',
                'password' => 'required|confirmed|min:6|max:60',
                'password_confirmation' => 'required|min:6|max:60',
            ]
        );

        if ($validator->fails()) 
        {
            return back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = bcrypt(request()->password);
        if ($user->save()) 
        {
            return redirect()->route('user.login')->with('message', 'User Registered Successfully');
        }
    }

    protected function login()
    {
        return view('pages.auth.login');
    }

    protected function loginProcess()
    {
        $validator = Validator::make(
            request()->all(),
            [
                'email' => 'required|min:6|max:50',
                'password' => 'required|min:6|max:60',
            ]
        );

        if ($validator->fails()) 
        {
            return back()->withErrors($validator)->withInput();
        }

        $existingUser = User::whereEmail(request()->email)->first();
        if ($existingUser == null) 
        {
            return back()->withErrors('No User Exists!');
        }

        $user = auth()->attempt(['email' => request()->email, 'password' => request()->password]);
        if ($user) 
        {
            return redirect()->route('client.search')->with('message', 'Welcome '.auth()->user()->name);
        }
        else 
        {
            return back()->withErrors('Invalid Credentials!');
        }
    }

    protected function logout()
    {
        auth()->logout();
        return back();
    }
}
