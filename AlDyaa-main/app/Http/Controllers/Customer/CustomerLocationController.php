<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Customerlocation;
use Illuminate\Http\Request;



class CustomerLocationController extends Controller
{


public function index()
    {
       $customerlocation = Customerlocation::all();
        return view('customer.create', compact('customerlocation'));
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


    public function store(Request $request)
    {
        Customerlocation::create($request->all());

        Customerlocation::create([
            'pop_city' => $request->pop_city,
            'pop_price' => $request->pop_price,
            'pop_area' => $request->pop_area,
        
            //'password' => Hash::make($request->password),
         
        ]);
        //dd($request->pop_area);
        toast('Customer Added','success','top-right')->showCloseButton();
      

        return redirect('/customer/create');
    }
    
    
    public function show(CustomerLocation $customerlocation)
    {
        //   $customerlocationshow = Customerlocation::get()->all();
    //     return view('customer.create', compact('customerlocationshow'));

    $customershowaa = Customerlocation::all();
    return view('customer.create', compact('customershowaa'));
   // return redirect('/customer/createprice/');
}



}
