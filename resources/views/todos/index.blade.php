<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todos page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    @extends('layouts.app')
    @section('content')
      <h1 class="text-center mt-3 mb-3">Todos Page</h1>
      <div class="card">
          <div class="card-header">
              Todos list
          </div>
          <div class="card-body">
              <ul class="list-group">
                  @foreach($todos as $todo)
                  <li class="list-group-item">{{$todo->name}}
                        @if(!$todo->completed)
                            <a href="{{ route('todos.complete',['todo'=>$todo->id]) }}" class="btn btn-warning btn-sm float-right text-white ml-3">Complete</a>
                        @endif
                        <a href="todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">View</a>
                        </li>
                  @endforeach
              </ul>
          </div>
          <div class="card-footer"></div>
      </div>
    @endsection
</body>
</html>