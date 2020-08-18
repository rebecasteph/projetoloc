<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>LoC | Inicial</title>
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
    
    @include('menu')

    <main class="container-fluid" style="margin-bottom: 100px; padding-left: 0px;padding-right: 0px;">
        @yield('paginas')

        <footer class="fixed-bottom"style="background-color: #f2f2f2;">
            <div class="footer footer-copyright text-center py-3">© 2020 League of Class:
            <a href="#">www.leagueofclass.com.br</a>
            </div>
        </footer>
    </main>



</body>
</html>