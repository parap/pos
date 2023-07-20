<?php

namespace App\Http\Controllers;

use App\Models\PaymentType;
use Illuminate\Routing\Controller;

class PaymentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = PaymentType::orderBy('id','desc')->paginate(5);
        return view('payment_types.index', compact('types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function update(int $id)
    {
        $paymentType = PaymentType::findOrFail($id);

        $paymentType->active = !$paymentType->active;
        $paymentType->save();

        return redirect()->route('payment-types.index')->with('success','PaymentType Has Been updated successfully');
    }
}
