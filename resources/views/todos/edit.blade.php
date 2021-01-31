<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit todos</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <h1 class="text-center mb-3 mt-3">Edit Todo</h1>
        <div class="card">
            <div class="card-header">Edit todo</div>
            <div class="card-body">
            <form action="{{ route('todos.edit',['todo'=>$todo->id]) }}"method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text"placeholder="Name"name="name"value="{{$todo->name}}"class="form-control">
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    </div>
                    <div class="form-group">
                    <textarea name="description"placeholder="Description" cols="5" rows="5"class="form-control">{{$todo->description}}</textarea>
                        <p class="text-danger">{{$errors->first('description')}}</p>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success">Update Todo</button>
                    </div>
            </form>
            </div>
        </div>
    @endsection
</body>
</html>