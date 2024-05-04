<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserListController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users from the database
        return view('admin.users.index', compact('users')); // Pass users to the view
    }




}
