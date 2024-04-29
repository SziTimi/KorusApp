<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ModifyUserController extends Controller
{
    public function show($user)
    {
        $user = User::findOrFail($user);  // Find the user by ID or throw a 404 if not found
        return view('admin.users.show', compact('user'));
    }

    public function update(Request $request, $user)
    {
        $user = User::findOrFail($user);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobil' => 'required|string|max:60',
            'address' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'par' => 'required|string|max:10',
            'password' => 'nullable|string|min:8|confirmed'
        ]);

        if (!empty($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }



        $user->update($validatedData);
        return redirect()->route('admin.users', $user->id)->with('success', 'Tag adatai sikeresen frissítve!');
    }
}
