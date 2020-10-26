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
    <body class="pt-0" style="background-image: url('/img/img-login.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="container-fluid">
            <div class="row justify-content-center" style="height: 90vh;">
                <div class="col-sm-5 align-self-center">
                    <div class="card">
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                                Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                                Register</a>
                            </li>
                        </ul>

                        <!-- Tab panels -->
                        <div class="tab-content">
                            <!--Panel 7-->
                            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                                <!--Body-->
                                <div class="modal-body mb-1">
                                    <div class="md-form form-sm mb-5">
                                        <i class="fas fa-envelope prefix"></i>
                                        <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                                    </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                                </div>
                                <div class="text-center mt-2">
                                    <button class="btn btn-roxo">Log in <i class="fas fa-sign-in ml-1"></i></button>
                                </div>



                                
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-center text-md-right mt-1">
                                    <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                    <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>
                        </div><!--/.Panel 7-->

                        <!--Panel 8-->
                        <div class="tab-pane fade" id="panel8" role="tabpanel">
                            <!--Body-->
                            <div class="modal-body">
                                <div class="md-form form-sm mb-5">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                                </div>

                                <div class="md-form form-sm mb-5">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                                </div>

                                <div class="text-center form-sm mt-2">
                                    <button class="btn btn-roxo">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                                </div>

                            </div><!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-right">
                                    <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>
                        </div> <!--/.Panel 8-->
                    </div><!-- card -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <footer>
            <div class="text-center py-3 ">
                © 2020 League of Class
            </div>
        </footer>
    </body>
</html>


