<!DOCTYPE html>
<html>
    <head>
        <title>Chat App</title>
        <meta charset="utf-8">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/forgetpass.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4 style="border-bottom: 1px solid #c5c5c5;">
                        <i class="glyphicon glyphicon-user"></i>
                        Account Access
                    </h4>
                    <div style="padding: 20px;">
                        <form id="login-form" action="index.php" method="post">
                            <fieldset>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" name="email" placeholder="Email" tabindex="1" class="form-control" required="" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="cmd" tabindex="2" class="form-control btn btn-forget" value="forgetPassword">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>