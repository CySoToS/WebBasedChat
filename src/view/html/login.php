<!DOCTYPE>
<html>
    <head>
        <title>Chat App</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="view/css/register.css"> 
    </head>
    <body>
        <!-- Navigation Bar -->
        <div id="navBar">
            <ul>
                <li><a href="index.php?cmd=createaccount">Register</a></li> 
                <li><a class="isactive">Login</a></li>
            </ul>
        </div>

        <!-- User Login -->
        <div id="login" align="center">
            <form method="post" action="index.php">
                <input id="userNameField" type="text"     name="username" placeholder="Username"><br>
                <input id="passwordField" type="password" name="password" placeholder="Password"><br>
                <input id="submitButton"  type="submit"   name="cmd" value="login"> <br>
            </form>
        </div>
    </body>
</html>
