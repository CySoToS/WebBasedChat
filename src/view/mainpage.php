<!DOCTYPE html>
<html>
    <head>
        <title>Chat App</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mainpage.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://use.fontawesome.com/45e03a14ce.js"></script>
        <script src="js/message.js"></script>
    </head>
    <body onload="startRefreshTimer();">
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
                        <li id="home-button" class="active"><a href="index.php?cmd=mainpage">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li id="changePass-button"><a href="index.php?cmd=changePass">Change Password</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php?cmd=logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">
                        <div class="profile-user">
                            <div class="profile-user-name">
                                People
                            </div>
                        </div>

                        <div class="profile-user-menu">
                            <ul id="peopleList" class="nav">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- Profile Content is where we display the chat history-->
                    <div class="profile-content"></div>
                    <div class="message_write">
                        <!-- Message is where the user types their message -->
                        <textarea id="message" name="message" class="form-control" placeholder="type a message"></textarea>
                        <div class="clearfix"></div>
                        <button onclick="sendMessage();" id="register-submit" tabindex="4" class="pull-right btn btn-success">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>