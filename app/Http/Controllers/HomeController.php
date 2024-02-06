<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function redirectToHome()
    {
        return view('my-portofolio');
    }
    
    function redirectToLogin()
    {
        return view('login');
    }

    function redirectToRegister()
    {
        return view('register');
    }

    function redirectToTodo()
    {
        return view('todo');
    }
}
