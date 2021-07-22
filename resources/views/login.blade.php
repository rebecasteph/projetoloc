<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <link rel="sortcut icon" href="loc-titulo.png" type="image/png" />;
        
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
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/chat.css">

        <title>LoC | Login</title>
    </head>
    <body class="grad pt-0" >
        <div class="container-fluid">

            <div class="row justify-content-center" style="height: 90vh;">
                <div class="col-sm-7 align-self-center">
                    <a style="color: #cbbde2; font-size: 40px; font-family: 'Nunito', sans-serif; margin: 0; text-decoration: none;" href="/">
                        League of Class
                    </a>
                    <div class="card" > 
                        <div class="d-flex" style="height: 70vh;">
                            <div class="col-sm-6">
                                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                                        Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                                        Novo cadastro</a>
                                    </li>
                                </ul>
                                <!-- Tab panels -->
                                <div class="tab-content">
                                    <!--LOGIN-->
                                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                                        <!--Body-->
                                        <div class="modal-body mb-1">
                                            <form role="form" action="{{url('/login')}}" method="post">
                                                {!! csrf_field() !!}

                                                <div class="md-form form-sm mb-4 form-group">  
                                                    <label data-error="wrong" data-success="right">
                                                        <i class="fas fa-envelope prefix"></i> E-mail
                                                    </label>
                                                    <input type="email" name="email" class="form-control form-control-sm validate" value="{{old('email')}}">
                                                </div>

                                                <div class="md-form form-sm mb-4 form-group">                                    
                                                    <label data-error="wrong" data-success="right">
                                                        <i class="fas fa-lock prefix"></i> Senha
                                                    </label>
                                                    <input type="password" name="password" class="form-control form-control-sm validate">
                                                    @if (session('errors'))
                                                        <small class="form-text text-danger"><i class="fas fa-exclamation-triangle"></i> {{session('errors') }}</small>
                                                    @endif
                                                    @if(session('mensagem'))
                                                        <small class="form-text text-success"><i class="fas fa-check-circle"></i> {{session('mensagem')}}</small>
                                                    @endif
                                                </div>
                                                <div class="d-flex justify-content-between text-center mt-2">
                                                    <a href="">Recuperar senha</a>
                                                    <button class="btn btn-roxo">Login</button>
                                                </div>                                        
                                            </form>
                                        </div>
                                    </div><!--/.Panel 7-->

                                    <!--NOVO CADASTRO-->
                                    <div class="tab-pane fade" id="panel8" role="tabpanel">
                                        <!--Body-->
                                        <div class="modal-body mb-1">
                                            <form role="form" action="{{url('/cadastro')}}" method="post">
                                                {!! csrf_field() !!}
                                                <!-- DADOS DE LOGIN -->
                                                <div class="md-form form-sm mb-2">   
                                                    <label >
                                                        <i class="fas fa-envelope prefix"></i> E-mail
                                                    </label>
                                                    <input type="email" name="email" class="form-control form-control-sm" required>
                                                </div>
                                                <!-- TIPO DE USUARIO -->
                                                <label class="md-form form-sm"><i class="fas fa-user-graduate prefix"></i> Usuário:</label>
                                                <div class="d-flex justify-content-around md-form form-sm mb-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="tipo-aluno" type="radio" name="tipo-perfil" value="2" checked>
                                                        <label>Aluno</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="tipo-prof" type="radio" name="tipo-perfil" value="1">
                                                        <label>Professor</label>
                                                    </div>
                                                </div>
                                                <!-- SENHA -->
                                                <div class="md-form form-sm mb-2">                                    
                                                    <label>
                                                        <i class="fas fa-lock prefix"></i> Senha
                                                    </label>
                                                    <input type="password" name="password" id="modalLRInput11" class="form-control form-control-sm" required>
                                                </div>
                                                <div class="md-form form-sm mb-2">                                    
                                                    <label>
                                                        <i class="fas fa-lock prefix"></i> Confirmar Senha
                                                    </label>
                                                    <input type="password" id="password2" class="form-control form-control-sm" required>
                                                </div>
                                                <div class="d-flex justify-content-end text-center mt-3">
                                                    <button class="btn btn-roxo">Cadastrar-se</button>
                                                </div>  
                                            </form>
                                        </div>
                                    </div> <!--/.Panel 8-->
                                </div><!-- tab-content -->
                            </div>
                            <div class="col-sm-6 none-mobile"style="margin: auto;">
                                <img class="img-login"src="{!!asset('img/mago.png')!!}" alt="mago">  
                            </div>
                        </div>
                        
                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </body>
</html>


