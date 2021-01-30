<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand"href="/ToDoApp/public">Todos App</a>
          <button class="navbar-toggler"type="button"data-toggle="collapse"data-target="#navbarSupportedContent">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse"id="navbarSupportedContent">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link"href="todos">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link"href="new-todos">Create Todo</a>
                  </li>
              </ul>
          </div>
      </nav>
      <div class="container">
            @if(session()->has('success'))
                    <div class="alert alert-success mt-3">
                        {{session()->get('success')}}<div class="float-right">&times;</div>
                    </div>
            @endif
            @yield('content')
      </div>
</body>
</html>