<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function login(LoginRequest $request)
    {

        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            // Check user role and redirect accordingly
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.index');  // Admin Dashboard Route
            } else {
                return redirect()->route('user.index');   // User Dashboard Route
            }


           return redirect()->route('loginForm');
        }
    }



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome');
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        //Auth::login($user);
        return redirect()->route('admin.index');
    }
}
