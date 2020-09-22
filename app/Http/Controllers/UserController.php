<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function vacancy()
    {
        if( auth()->user()->corporate ){
            return view('user.company.vacancy');
        }
        return view('user.candidate.vacancy');
    }

    public function profile()
    {
        if( auth()->user()->corporate ){
            return view('user.company.profile');
        }
        return view('user.candidate.profile');
    }
}
