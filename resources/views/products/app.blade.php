<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @extends('home')
    @section('contentt')
    
  
    <form method="GET">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('all-products')}}">
              <span data-feather="home" class="align-text-bottom"></span>
              all products
            </a>
          </li>
          <li class="nav-item">
          
            <a class="nav-link" href="{{url('create-product')}}">
              <span data-feather="file" class="align-text-bottom"></span>
              create products
</a>
          </li>
        </ul>
        </form>
@yield('content')
    @endsection

</body>
</html>