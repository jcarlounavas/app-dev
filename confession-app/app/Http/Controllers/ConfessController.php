<?php

namespace App\Http\Controllers;

use App\Models\ConfessModel;
use App\Models\UserConfession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ConfessController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $cons = ConfessModel::where('user_id', $user->id)->get();
        return view('Confession.dashboard', compact('cons'));
    }

    public function showConfessForm($username)
    {
        $user = UserConfession::where('username', $username)->first();
        if (!$user) {
            return redirect()->route('home')->withErrors(['username' => 'User not found.']);
        }
        return view('Confession.Forms.confess', compact('username'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'confess' => 'required|string|max:1000',
            'username' => 'required|string',
        ]);

        $normalizedUsername = ltrim($request->username, '@');
        $user = UserConfession::where('username', $normalizedUsername)->first();
        if(!$user) {
            return redirect()->back()->withErrors(['username' => 'User not found.']);
        }

        ConfessModel::create([
            'confess' => $request->confess,
            'user_id' => $user->id
        ]);
        
        return redirect()->route('home')->with('success', 'Confession submitted successfully.');
    }
    
    //Delete Function
    public function delete(Request $request){
        
        $user = Auth::user();
        $cons = ConfessModel::where('user_id', $user->id)->get();

        
    }

}
