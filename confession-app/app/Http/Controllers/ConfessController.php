<?php

namespace App\Http\Controllers;

use App\Models\ConfessModel;
use Illuminate\Http\Request;

class ConfessController extends Controller
{
    //
    public function index()
    {
        $cons = ConfessModel::all();
        return view('Confession.dashboard', compact('cons'));
    }
}
