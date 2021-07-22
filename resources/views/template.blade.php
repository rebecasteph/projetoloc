<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
        <!-- icons -->
        <script src="https://kit.fontawesome.com/c1d8bcdf04.js" crossorigin="anonymous"></script>
            
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- local style -->
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('/css/chat.css')}}">
        <link rel="stylesheet" href="{{asset('/css/elos.css')}}">

        <title>LoC | @yield('title')</title>
    </head>
    <body>
        <header>
            @include('navbar')
        </header>

        <div class="container-fluid">
            <div class="tela-geral row" >
                @yield('content')
            </div>
        </div>
 
        <footer>
            <div class="text-center py-3 ">
                © 2021 League of Class
            </div>
        </footer>
    </body>
</html>