<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
    public static function middleware(): array
{
    return [
        'auth'
    ];
}

    public function index()
{

    return view('user.index');
}


    /*public function getAllUsers(): JsonResponse
    {
        // Fetch users with only the specified fields
        $users = User::select('name', 'email', 'mobil')->get();

        // Return the users as a JSON response
        return response()->json($users);
    }

    public function getOneUser($id): JsonResponse
    {
        // Fetch a single user by ID with only the specified fields
        $user = User::select('name', 'email', 'mobil')->findOrFail($id);

        // Return the user as a JSON response
        return response()->json($user);
    }

    public function denied()
    {
        return view('user.denied');
    }*/




}

