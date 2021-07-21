<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>League of Class</title>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bulma.css">

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
        

        <style>
            html, body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
                height: 100%;
            }

            .links > a {
                color: #cbbde2;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body class="grad p-0">

        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
                <img src="/img/loc-titulo.png" height="30" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-inicial" aria-controls="menu-inicial" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu-inicial">
                <div class="navbar-nav links m-2">
                    <a class="nav-item nav-link" href="/aluno/login">O projeto</a>
                    <a class="nav-item nav-link" href="/professor/login">O sistema</a>
                    <a class="nav-item nav-link" href="">sobre nós</a>
                    <a class="nav-item nav-link btn is-primary is-inverted" href="">login</a>
                </div>
            </div>
        </nav>


        <div class="conteiner">
            <div class="p-md-5 pt-3 col-md-6 align-items-center" style="color: #dee2e6 !important;">
                <h1 class="display-4">League of Class</h1>
                <p class="lead">Aumente o engajamento de seus alunos na submissão de respostas e atividades</p>

                <p>O League of Class é uma plataforma gamificada inspirada
                    em jogos Multiplayer Online Battle Arena (MOBA), com pontuações baseadas
                    em submissões de atividades.</p>
                <p>Automatize suas avaliações e incentive o trabalho em equipe em suas aulas.</p>
            
                
                    <a class="btn is-primary is-inverted" href="#" role="button">Saiba mais</a>

                    <a class="btn is-primary is-outlined" href="#" role="button">Começar agora</a>




            
            </div>
            <!-- IMAGEM -->
            <img src="img/herois-inicial.png" class="herois-inicial " srcset="">
        </div>


        
    </body>
</html>
