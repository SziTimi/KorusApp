<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

