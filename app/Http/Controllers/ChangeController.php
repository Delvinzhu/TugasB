<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\ChangeRequest;
use Auth;
use Illuminate\Support\Facades\Hash;

class ChangeController extends Controller
{
    public function index(){
        $oldpassword = Auth::user()->password;
        return view('auth.password');
    }

    public function store(ChangeRequest $request){
        $user = Auth::user();
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('message','Password Changed');
    }
}
