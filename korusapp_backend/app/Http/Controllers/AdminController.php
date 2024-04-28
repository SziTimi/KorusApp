<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public static function middleware(): array
    {
        return [
            'auth'
        ];
    }

    public function index()
    {

        return view('admin.index'); // Pass users to the view
    }


   /* public function update(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|email',
            'address' => 'required|string|max:100',
            'par' => 'nullable|string|max:10',
            'date_of_birth' => 'required|date',
            'mobil' => 'required|string|max:60'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'par' => $request->par,
            'par' => $request->par,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'mobil' => $request->mobil
        ]);



        return redirect()->back()->with('success', 'User updated successfully!');
    }
   */
}
