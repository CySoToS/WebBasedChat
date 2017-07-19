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
                <li><a class="isactive">Register</a></li> 
                <li><a href="index.php?cmd=loginpage">Login</a></li>
            </ul>
        </div>

        <!-- User Login -->
        <div id="login" align="center">
            <form method="post" action="index.php">
                <input id="forenameField" type="text"    name="forename" placeholder="Forename"><br>
                <input id="surnameField"  type="text"    name="surname"  placeholder="Surname"><br>
                <input id="userNameField" type="text"     name="username" placeholder="Username"><br>
                <input id="passwordField" type="password" name="password" placeholder="Password"><br> 
                <input id="verifyPassField" type="verifyPassword" name="verifyPassword" placeholder="Re-enter Password"><br>
                <input id="email" type="text" name="email" placeholder="e-mail"><br>
                <input id="submitButton"  type="submit"   name="cmd" value="register"> <br>
            </form>
        </div>
    </body>
</html>
