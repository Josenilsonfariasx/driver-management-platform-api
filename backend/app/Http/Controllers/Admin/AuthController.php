<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\Admin\LoginService;

class AuthController extends Controller {
    public function login(LoginRequest $request){
        $loginService = new LoginService();
        return $loginService->execute($request->all());
    }
}
