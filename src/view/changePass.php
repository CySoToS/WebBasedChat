<!DOCTYPE html>
<html>
    <head>
        <title>Chat App</title>
        <meta charset="utf-8">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mainpage.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php?cmd=mainpage"><?= $forename . " " . $surname ?></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li id="home-button"><a href="index.php?cmd=mainpage">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li id="changePass-button" class="active"><a href="index.php?cmd=changePass">Change Password</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php?cmd=logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4 style="border-bottom: 1px solid #c5c5c5;">
                        <i class="glyphicon glyphicon-user"></i>Change Password
                    </h4>
                    <div style="padding: 20px;" id="form-olvidado">
                        <form id="login-form" action="index.php" method="post">
                            <fieldset>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">Current Password</span>
                                    <input type="password" name="oldPassword" placeholder="Password" tabindex="1" class="form-control" required="" autofocus="">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">New Password</span>
                                    <input type="password" name="newPassword" placeholder="Password" tabindex="2" class="form-control" required="">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">Repeat New Password</span>
                                    <input type="password" name="rNewPassword" placeholder="Password" tabindex="3" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="cmd" tabindex="4" class="btn btn-success" value="changePassword">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>