<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Unit;

class HomeController extends Controller
{
    public function dash(){

        $cats = Unit::all();
        return view('welcome', compact('cats'));
    }

    public function index()
    {
        $cats = Unit::all();
        return view('welcome',compact('cats'));
    }
}
