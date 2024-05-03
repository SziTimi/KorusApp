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

    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $additionalAmount = $request->input('additional_amount');
        $payment->amount_paid += $additionalAmount; // Update the amount paid
        $payment->payment_date = now();
        $payment->save(); // Save the changes


        return back()->with('success', 'Befizetés frissítve!');
    }


}
