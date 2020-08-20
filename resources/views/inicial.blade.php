<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/js/all.js" >
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- local style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <title>League of Class</title>
</head>
<body>
    <nav class="roxo navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="\">League of Class</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse my-1 justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-self-end">
                <li class="nav-item active">
                    <a class="nav-link" href="\">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Destaques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Preços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Desativado</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container-fluid">
        <div class="row" style="height: 100%;">
            @include('menu.menu')
        </div>   
    </main> 
</body>
<footer class="fixed-bottom"style="background-color: #f2f2f2;">
    <div class="footer footer-copyright text-center py-3">© 2020 League of Class:
        <a href="#">www.leagueofclass.com.br</a>
    </div>
</footer>

</html>
