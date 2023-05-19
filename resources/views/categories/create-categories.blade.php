@extends('categories.app')
@section('content')
        <div class="card uper">
            <div class="card-header">
                <?php 
                if($action==1){
                    $type="Edit";
                    foreach($categories as $key => $category){
                        $name= $category->name;
                        $id=$category->id;
                    }
                }else{
                    $type="Creat";
                    $name= "";  
                }
                
                ?>
                {{$type}} Category
            </div>
            <div class="card-body">
                @if($action==0)
                <form method="POST" action="{{url('STORECategory')}}">
                @else
                <form method="POST" action="{{url('upCategory/'.$id)}}">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Category Name:</label>
                        <input type="text" value='<?php echo"$name";?>' class="form-control" name="category_name" />
                    </div>
                    <button type="submit" class="btn btn-primary">{{$type}}</button>
                </form>
            </div>
        </div>
    @endsection