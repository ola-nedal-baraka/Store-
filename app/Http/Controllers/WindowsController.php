<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WindowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function root(){
        return view('home');
    }
    public function create_order(){
        $action=0;
    $product_id="";
    return view('orders.create_order',compact(['product_id','action']));
    }
    public function create_product(){
        $action=0;
    $category_id="";
    return view('products.create_product',compact(['action','category_id']));
    }
    public function create_category(){
        $action=0;
    return view('categories.create_categorie',compact(['action']));;
    }
    public function createOrder(){
        $action=0;
    return view('orders.create_order',compact(['product_id','action']));

    }
    public function CreateProduct(){
        $action=0;
        return view('products.create_product',compact(['action','category_id']));    
    }
    public function productsApp(){
        return view('products.app');
    }
    public function OrdersApp(){
        return view('Orders.app');
    }
    public function categoriesApp(){
        return view('categories.app');
    }
}
