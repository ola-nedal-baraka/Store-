

@extends('products.app')
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
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th width="280px">Actions</th>
            </tr>
            @foreach($products  as $key => $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->Name}}</td>
                <td>{{$product->Price}}</td>
                <td>{{$product->Quantity}}</td>
                <td>
                    
                    <form action="{{url('update/'.$product->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-pencil">
                            <i class="fa fa-btn fa-pencil"></i>Update
                        </button>
                    </form>
                    
                    
                    <form action="{{url('delete/'.$product->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>
                    </form>

                    <form action="{{url('createOrder/'.$product->id.$product->category_id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Create Order
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

</div>
    </div>

@endsection