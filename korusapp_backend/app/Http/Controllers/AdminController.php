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

        return view('admin.index');
    }
}
