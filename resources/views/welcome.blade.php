<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todos App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!-- Styles -->
        <style>
                html,body {
                    background-color: rgb(187, 178, 178);
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                    padding:0;
                }
                
                .content {
                    position: relative;
                }
                
                .title {
                    font-size: 84px;
                    position: absolute;
                    left: 50%;
                    margin-top: 15%;
                    transform: translateX(-50%);
                }
                
                .m-b-md {
                    margin-bottom: 30px;
                }
                
                .title>a {
                    color: #EAD7D7;
                    font-weight:bold;
                }
                
                .title>a:hover {
                    text-decoration: none;
                    color:pink;
                }
        </style>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <a href="todos"data-toggle="tooltip"title="Nhấp vào đây"data-placement="right">Todos</a>
                </div>
            </div>
            <!--script-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <script>
                $(document).ready(function(){
                  $('[data-toggle="tooltip"]').tooltip();   
                });
            </script>
    </body>
</html>
