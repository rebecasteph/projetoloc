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
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/chat.css">

        <title>LoC | Login</title>
    </head>
    <body class="pt-0" style="background-color: #563d7c; background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="container-fluid">

            <div class="row justify-content-center" style="height: 90vh;">
                <div class="col-sm-7 align-self-center">
                    <a style="color: #cbbde2; font-size: 40px; font-family: 'Nunito', sans-serif; margin: 0; text-decoration: none;" href="/">
                        League of Class
                    </a>
                    <div class="card"> 
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                                Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                                Cadastrar</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <div class="col-sm-6">
                                <!-- Tab panels -->
                                <div class="tab-content">
                                    <!--Panel 7-->
                                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                                        <!--Body-->
                                        <div class="modal-body mb-1">
                                            <form role="form" action="{{url('/professor/login')}}" method="post">
                                                {!! csrf_field() !!}

                                                <div class="md-form form-sm mb-4 form-group {{$errors->has('email') ? ' has-error' : ''}}">  
                                                    <label data-error="wrong" data-success="right">
                                                        <i class="fas fa-envelope prefix"></i> E-mail
                                                    </label>
                                                    <input type="email" name="email" class="form-control form-control-sm validate" value="{{old('email')}}">
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>

                                                <div class="md-form form-sm mb-4 form-group {{$errors->has('password') ? ' has-error' : ''}}">                                    
                                                    <label data-error="wrong" data-success="right">
                                                        <i class="fas fa-lock prefix"></i> Senha
                                                    </label>
                                                    <input type="password" name="password" class="form-control form-control-sm validate">

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <a href="professor/login" class="text-center mt-2">
                                                        <button class="btn btn-roxo"><i class="fas fa-chalkboard-teacher mr-2"></i>Login Professor</button>
                                                    </a>                                        
                                                </div>
                                            </form>
                                        </div>
                                    </div><!--/.Panel 7-->

                                    <!--Panel 8-->
                                    <div class="tab-pane fade" id="panel8" role="tabpanel">
                                        <!--Body-->
                                        <div class="modal-body mb-1">
                                            <div class="md-form form-sm mb-4">   
                                                <label data-error="wrong" data-success="right" for="modalLRInput10">
                                                    <i class="fas fa-envelope prefix"></i> E-mail
                                                </label>
                                                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                                            </div>

                                            <div class="md-form form-sm mb-4">                                    
                                                <label data-error="wrong" data-success="right" for="modalLRInput11">
                                                    <i class="fas fa-lock prefix"></i> Senha
                                                </label>
                                                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                                            </div>
                                            <div class="md-form form-sm mb-4">                                    
                                                <label data-error="wrong" data-success="right" for="modalLRInput11">
                                                    <i class="fas fa-lock prefix"></i> Confirmar Senha
                                                </label>
                                                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                                            </div>
                                            <div class="text-center mt-2">
                                                <button class="btn btn-roxo"><i class="fas fa-user-plus mr-2"></i>Cadastrar</button>
                                            </div>
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
    <footer>
        <div class="text-center py-3 ">
            © 2020 League of Class
        </div>
    </footer>

</html>


