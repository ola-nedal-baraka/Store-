@extends('categories.app')
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
                <th width="280px">Actions</th>
            </tr>
            @foreach($categories  as $key => $Category)
            <tr>
                <td>{{$Category->id}}</td>
                <td>{{$Category->name}}</td>
                <td>
                    
                    <form action="{{url('updateCategory/'.$Category->id)}}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-pencil">
                            <i class="fa fa-btn fa-pencil"></i>Update
                        </button>
                    </form>
                    
                    
                    <form action="{{url('deleteCategory/'.$Category->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>

                    </form>

                    <form action="{{url('CreateProduct/'.$Category->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Create Product
                        </button>
                </td>
            </tr>
            @endforeach
        </table>

</div>
    </div>

@endsection