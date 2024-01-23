<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all(); // Fetch all customers
        return view('customer.index', compact('customers')); // Pass $customers to the view
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'cell_no' =>'required',
            'box_no' =>'required',
            'amount' =>'required',
           ]);
           $customer = new customer;
           $customer->customer_name=$request->customer_name;
           $customer->cell_no=$request->cell_no;
           $customer->box_no=$request->box_no;
           $customer->amount=$request->amount;
           $customer->save();
        return redirect('/customer'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
         return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->customer_name=$request->customer_name;
        $customer->cell_no=$request->cell_no;
        $customer->box_no=$request->box_no;
        $customer->amount=$request->amount;
        $customer->save();
        return redirect('/customer');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/customer');
    }
}
