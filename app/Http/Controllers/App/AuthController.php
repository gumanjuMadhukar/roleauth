<?php

namespace App\Http\Controllers\App;
use App\Http\Controllers\Controller;

use App\Http\Requests\App\Auth\RegisterRequest;
use App\Services\App\AuthService;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function __construct(protected AuthService $service)
    {

    }
    public function login(){
        return view("app.auth.login");
    }
    public function register(){
        return view("app.auth.register");
    }

    public function registerSave(RegisterRequest $request)
    {
        return $this->service->registerSave($request->validated());
    }
}