<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        // Fetch payments with member data
        $payments = Payment::with('user')->get();

        return view('admin.payments.index', compact('payments'));

        //return view('admin.payments.index', ['payments' => $payments]);
    }


}
