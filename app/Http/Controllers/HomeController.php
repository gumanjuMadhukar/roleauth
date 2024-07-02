<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function Login(){
        return view("app.auth.login");
    }
    public function Register(){
        return view("app.auth.register");
    }
}

?>;