<!DOCTYPE html>
<html>
    <head>
        <title>Chat App</title>
        <meta charset="utf-8">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/loginToRegister.js"></script>
        <script src="js/registrationCheck.js"></script>
        <script src="js/loginCheck.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel main-panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link">Register</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" action="index.php" method="post" style="display: block;">
                                        <div class="form-group">
                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="cmd" tabindex="3" class="form-control btn btn-login" value="login" onclick="return checkLogin();">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <input type="submit" name="cmd" tabindex="4" class="form-control forgot-password" value="Forgot my password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form id="register-form" action="index.php" method="post" style="display: none;">
                                        <div class="form-group">
                                            <input type="text" name="forename" tabindex="1" class="form-control" placeholder="Forename" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="surname" tabindex="2" class="form-control" placeholder="Surname" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="username" tabindex="3" class="form-control" placeholder="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" tabindex="4" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" tabindex="5" class="form-control" placeholder="Email" value="">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="cmd" tabindex="6" class="form-control btn btn-register" value="register" onclick="return checkRegistration();">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>