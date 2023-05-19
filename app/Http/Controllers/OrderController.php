<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(){
        $orders = Order::get();
        return view('orders.all-orders',compact('orders'));
    }

    public function store(Request $request){
        $orders = new Order();
        $orders->name = $request->Order_name;
        $orders->user_id = $request->Order_user_id;
        $orders->product_id = $request->Oreder_product_id;
        $orders->quantity = $request->product_quantity;
        $orders->total_price = $request->product_price;
        $orders->save();
        $action=0;
        return redirect()->back()->with('action');
    }

    public function distroy($id){
        Order::where('id',$id)->delete();
        $orders->save();
        return redirect()->back();
    }

    public function goingToTheUpdate($id){
        $orders=Order::where('id',$id)->get();
        $action=1;
        return view('orders.create_order',compact(['orders','action']));
    }

    public function update($id){
        Order::where('id',$id)
        ->update([
        'name'=>$_POST['Order_name'],
        'user_id'=>$_POST['Order_user_id'],
        'product_id'=>$_POST['Oreder_product_id'],
        'quantity'=>$_POST['product_quantity'],
        'total_price'=>$_POST['product_price'],
    
    
    ]);
        $orders = Order::get();
        return view('orders.all-orders',compact('orders'));
    }
}
