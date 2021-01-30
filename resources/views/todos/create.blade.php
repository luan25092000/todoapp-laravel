<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create todos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <h1 class="text-center mt-3 mb-3">Create Todo</h1>
        <div class="card">
            <div class="card-header">Create new todo</div>
            <div class="card-body">
                <form action="store-todos"method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text"class="form-control"name="name"placeholder="Name">
                    <p class="text-danger">{{$errors->first('name')}}</p>
                    </div>
                    <div class="form-group">
                          <textarea class="form-control" name="description" rows="5"cols="5"placeholder="Description"></textarea>
                          <p class="text-danger">{{$errors->first('description')}}</p>
                    </div>
                    <div class="form-group text-center">
                          <button type="submit"class="btn btn-success">Create</button>
                    </div>
                </form>
            </div>
            <div class="card-footer"></div>
        </div>
    @endsection
</body>
</html>