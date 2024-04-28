<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
            'par' => 'required|string|max:10',
        ]);

        $user->update($validatedData);
        return redirect()->route('admin.users', $user->id)->with('success', 'Tag adatai sikeresen frissítve!');
    }
}
