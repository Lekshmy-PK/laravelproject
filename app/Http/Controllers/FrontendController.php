<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('services');
    }
    public function login()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
}

