@extends('orders.app')
@section('content')
        <div class="card uper">
            <div class="card-header">
                <?php 
                if($action==1){
                    $type="Edit";
                    foreach($orders as $key => $order){
                        $name= $order->name;
                        $user_id=$order->user_id;
                        $product_id=$order->product_id;
                        $quantity=$order->quantity;
                        $price=$order->price;
                        $id=$order->id;
                    }
                }else{
                    $type="Creat";
                    $name= "";
                    $user_id= "";
                    $quantity= "";
                    $price="";
                }
                
                ?>
                {{$type}} Order
            </div>
            <div class="card-body">
                @if($action==0)
                <form method="post" action="{{url('STOREOrder')}}">
                @else
                <form method="post" action="{{url('upOrder/'.$id)}}">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Order Name:</label>
                        <input type="text" value='<?php echo"$name";?>' class="form-control" name="Order_name" />
                    </div>
                    <div class="form-group">
                        <label for="name">User id:</label>
                        <input type="text" value='<?php echo"$user_id";?>' class="form-control" name="Order_user_id" />
                    </div>
                    <div class="form-group">
                        <label for="name">Product id:</label>
                        <input type="text" value='<?php echo"$pro_id";?>' class="form-control" name="Oreder_pro_id" />
                    </div>
                    <div class="form-group">
                        <label for="name">Product Quantity:</label>
                        <input type="text" value='<?php echo"$cuantity";?>' class="form-control" name="product_cuantity" />
                    </div>
                    <div class="form-group">
                        <label for="name">Product Quantity:</label>
                        <input type="text" value='<?php echo"$price";?>' class="form-control" name="product_price" />
                    </div>
                    <button type="submit" class="btn btn-primary">{{$type}}</button>
                </form>
            </div>
        </div>
    @endsection