@extends('products.app')
@section('content')
        <div class="card uper">
            <div class="card-header">
                <?php 
                if($action==1){
                    $type="Edit";
                    foreach($products as $key => $product){
                        $name= $product->name;
                        $Price= $product->price;
                        $category_id= $product->category_id;
                        $id=$product->id;
                    }

                }else{
                    $type="Creat";
                    $name= "";
                    $Price="";  
                }
                
                ?>
                {{$type}} Product
            </div>
            <div class="card-body">
                @if($action==0)
                <form method="post" action="{{url('STORE')}}">
                @else
                <form method="post" action="{{url('up/'.$id)}}">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" value='<?php echo"$name";?>' class="form-control" name="name" />
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" value='<?php echo"$Price";?>'class="form-control" name="Price" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Category Id:</label>
                        <input type="text" value='<?php echo"$category_id";?>'class="form-control" name="category_id" />
                    </div>
                    <button type="submit" class="btn btn-primary">{{$type}}</button>
                </form>
            </div>
        </div>
    @endsection