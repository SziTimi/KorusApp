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


            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.index');
            } else {
                session()->flash('error', 'Nem vagy admin, nincs jogod belépni');
                return redirect()->route('user.denied');
            }

        } else {
            // If authentication fails, redirect back with an error message
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
            return redirect()->route('loginForm');
        }


    }

    /* public function apiLogin(LoginRequest $request)
     {
         if (Auth::attempt($request->validated())) {
             $request->session()->regenerate();
             $user = Auth::user();

             // Return user data and a success status
             return response()->json([
                 'message' => 'Login successful',
                 'user' => $user,
             ], 200);
         } else {
             // Return error message
             return response()->json(['message' => 'Invalid credentials'], 401);
         }
     }
 */


    public function logout(Request $request): RedirectResponse
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

    public function register(RegisterRequest $request): RedirectResponse
    {
        $user = User::create($request->validated());
        //Auth::login($user);
        return redirect()->route('admin.index');
    }
}
