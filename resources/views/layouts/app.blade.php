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
          <a class="navbar-brand"href="{{ route('welcome') }}">Todos App</a>
          <button class="navbar-toggler"type="button"data-toggle="collapse"data-target="#navbarSupportedContent">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse"id="navbarSupportedContent">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link"href="{{ route('todos.view') }}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link"href="{{ route('todos.create') }}">Create Todo</a>
                  </li>
              </ul>
          </div>
      </nav>
      <div class="container">
            @if(session()->has('success'))
                    <div class="alert alert-success mt-3 alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{session()->get('success')}}
                    </div>
            @endif
            @yield('content')
      </div>
      <!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  xfbml            : true,
		  version          : 'v9.0'
		});
	  };

	  (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your Chat Plugin code -->
	<div class="fb-customerchat"
	  attribution=setup_tool
	  page_id="103558981631961"
    logged_in_greeting="Mình là Luân, mình có thể giúp gì được cho bạn!"
    logged_out_greeting="Mình là Luân, mình có thể giúp gì được cho bạn!">
    </div>
</body>
</html>