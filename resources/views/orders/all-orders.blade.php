@extends('orders.app')
@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                <h3>Products</h3>
                </div>
            </div>


            
            <table class="table table-bordered">
            <tr>
                <th>Order ID</th>
                <th>Order Name</th>
                <th>User Id</th>
                <th>Product Id</th>
                <th>Product Quantity</th>
                <th width="280px">Actions</th>
            </tr>
            @foreach($orders  as $key => $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->user_id}}</td>
                <td>{{$order->product_id}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->total_price}}</td>
                <td>
                    
                    <form action="{{url('updateOrder/'.$order->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-pencil">
                            <i class="fa fa-btn fa-pencil"></i>Update
                        </button>
                    </form>
                    
                    
                    <form action="{{url('deleteOrder/'.$order->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

</div>
    </div>

@endsection