<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function user()
    {
        return view('auth.user');
    }

    public function admin()
    {
        return view('auth.admin');
    }
}
