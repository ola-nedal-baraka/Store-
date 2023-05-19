<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(){
        $products = Product::get();
        return view('products.all-products',compact('products'));
    }

    public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->Price;
        $product->category_id = $request->category_id;
        $product->save();
        $action=0;
        return redirect()->back()->with('action');
    }

    public function distroy($id){
        Product::where('id',$id)->delete();
        $Product->save();
        return redirect()->back();
    }

    public function goingToTheUpdate($id){
        $products=Product::where('id',$id)->get();
        $action=1;
        return view('products.create_product',compact(['products','action']));
    }

    public function update($id){
        Product::where('id',$id)
        ->update([
        'name'=>$_POST['name'],
        'price'=>$_POST['price'],
        'category_id'=>$_POST['category_id']]);
        $product->save();
        $products = Product::get();
        return view('products.all-products',compact('products'));
    }
}
