function checkLogin()
{
    var username = document.getElementById("login").elements["username"].value;
    var password = document.getElementById("login").elements["password"].value;
    var errorMessage = "";
    
    if((username == null) || (username == "")) {
        errorMessage += "Enter username\n";
    }
    if((password == null) || (password == "")) {
        errorMessage += "Enter password\n";
    }
    
    if(errorMessage != "") {
        alert(errorMessage);
    }
    return (error == "");
}