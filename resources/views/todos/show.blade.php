<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todos item</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <h1 class="text-center mt-3 mb-3">{{$todo->name}}</h1>
        <div class="card">
            <div class="card-header">Details</div>
            <div class="card-body">
                {{$todo->description}}
                <a href="../todos" class="btn btn-danger">Exit</a>
                <a href="../todos/{{$todo->id}}/edit"class="btn btn-info">Edit</a>
                <a href="../todos/{{$todo->id}}/delete"class="btn btn-warning">Delete</a>
            </div>
            <div class="card-footer"></div>
        </div>
    @endsection
</body>
</html>