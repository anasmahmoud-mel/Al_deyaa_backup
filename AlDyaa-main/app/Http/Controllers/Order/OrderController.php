<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $order = Order::all();
        return view('order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Order::create($request->all());
        toast('Orders Adedd','success','top-right')->showCloseButton();
        // return redirect('/order');

        return redirect('/order/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $ordershow = Order::get()->all();
        return view('order.index', compact('ordershow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //$order=Order::find($id);
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {


        //$order=$request->all();
        // Order::find($id)->update($order);
        $order->update([
            //'name' => $request->name,
            'serial' => $request->serial,
            'polise' => $request->polise,
            'Account_name' => $request->Account_name,
            'file' => $request->file,

            'receiver_full_name' => $request->receiver_full_name,
            'receiver_phone_number' => $request->receiver_phone_number,
            'receiver_secondary_phone_number' => $request->receiver_secondary_phone_number,
            'city' => $request->city,
            'area' => $request->area,
            'receiver_street_name' => $request->receiver_street_name,
            'receiver_notes' => $request->receiver_notes,

            'package_charge' => $request->package_charge,
            'shpping_charge' => $request->shpping_charge,
            'postal_charge' => $request->postal_charge,
            'package_content' => $request->package_content,

        ]);
        toast('Orders Updated','success','top-right')->showCloseButton();
        return redirect('/order/show');


        //$order->save();



        // Order::find($order)->update($order);
        //$order->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();

       
        return response()
            ->json(['state' => 'deleted']);
            toast('Info Toast','info');



       // return redirect()->back();
    }
    public function softDelete($id)
    {
        // $crud = Crud::onlyTrashed()->get();
        // $crud->deleted();

        // Alert::warning('Warning Title', 'Warning Message');
        // alert()->question('Title','Lorem Lorem Lorem');
        //Alert::alert('Title', 'Message', 'Type');

        $order = Order::find($id);

        //  alert()->question('Are you sure?', 'You won\'t be able to revert this!')
        //    ->showConfirmButton('Yes! Delete it', '#3085d6')
        //     ->showCancelButton('Cancel', '#aaa')->reverseButtons()
        // ->focusConfirm(true);

        $order->delete();
        return redirect('/order/show');
    }

    public function destroy2(Request $request, $id)
    {
        Order::where('id', $id)->delete();
        return back();
    }
  
    }
    

