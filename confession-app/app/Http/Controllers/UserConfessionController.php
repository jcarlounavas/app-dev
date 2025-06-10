<?php

namespace App\Http\Controllers;
use App\Models\UserConfession;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserConfessionController extends Controller
{
    //
    public function registration(Request $request){
        $user = UserConfession::all();
        if ($user->count() >= 1) {
            return redirect()->route('login')->with('error', 'Registration is closed. Only one user is allowed.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:user_confessions,username|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

    UserConfession::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('/dashboard')->with('success', 'Login successful.');
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
}
