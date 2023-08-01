<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request) {
        // dd($request);
        $validate = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'linkedin_username' =>'required',
            'mobile_number' => 'required',
            'job_id' => 'required',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required'
        ]);


        $validate['password'] = bcrypt($validate['password']);
        $validate['state_id'] = 1;
        $validate['admin'] = 0;
        $validate['coin'] = 0;

        User::create($validate);

        return redirect('/login')->with('registerSuccess', 'Successfully registered!');
    }

    public function login(Request $request) {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return redirect()->back()->with('loginError', 'Login Failed!');
    }

    public function logout() {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function registrationPrice()
    {
        $registrationPrice = User::first()->registration_price;

        return view('register', compact('registrationPrice'));
    }
}
