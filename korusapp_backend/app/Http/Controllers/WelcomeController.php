<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        return view ('welcome');
        /*$data= array('message'=>"Üdv az oldalon");
        return response()->json($data);*/
    }

}
