<?php


namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller


{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $customer = Customer::all();
        return view('customer.index', compact('customer'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $customershow = Customer::get()->all();
        return view('customer.index', compact('customershow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
    
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {

        $customer->update([

            'name' => $request->name,
            'contact_name' => $request->contact_name,
            'phone_number' => $request->phone_number,
            'mobile' => $request->mobile,
            'city' => $request->city,
            'area' => $request->area,
            'adress'=>$request->adress,
           
        ]);

        toast('Cutomer Updated','success','top-right')->showCloseButton();
        return redirect('customer/create');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

       
        return response()
            ->json(['state' => 'Has been deleted']);
            toast('Info Toast','info');

    }
   


    
    public function store(Request $request)
    {
        Customer::create($request->all());
        toast('Customer Added','success','top-right')->showCloseButton();
      

        return redirect('/customer/create');
    }
}
