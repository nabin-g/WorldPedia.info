<?php

namespace App\Http\Controllers\Backend\AdminAuth;

use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BackendController
{
    public function index()
    {
        return view('backend.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',

        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('admin-dashboard'));
        }
        return redirect()->route('admin-login')->with('alert', 'Invalid Username/Password.. Please try again !!');
    }

    protected function guard()
    {
        return Auth::guard();
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('@dashboard@/login');
    }

}

