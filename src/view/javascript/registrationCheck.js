function checkRegistration()
{
    var username = document.getElementById("login").elements["username"].value;
    var firstPasswordAttempt = document.getElementById("login").elements["password"].value;
    var secondPasswordAttmpt = document.getElementById("login").elements["password"].value;
    var email = document.getElementById("login").elements["email"].value;  
    var forename = document.getElementById("login").elements["forename"].value;   
    var surname = document.getElementById("login").elements["surname"].value;
    var atPosition=email.indexOf("@");
    var dotPosition=email.lastIndexOf(".");
    
    var errorMessage = "";
    
    if((username == null) || (username == "")) {
        errorMessage += "Enter username\n";
    }
    //Validating Email pattern.
    if (atPosition<1 || dotPosition<atPosition+2 || dotPosition+2>=email.length) {
        errorMessage+="Not a valid e-mail address\n";
    }
    if((firstPasswordAttempt == null) || (firstPasswordAttempt == "")) {
        errorMessage += "Enter password\n";
    }
	if((secondPasswordAttmpt == null) || (secondPasswordAttmpt == "")) {
        errorMessage += "Enter password\n";
    }
    if(firstPasswordAttempt != secondPasswordAttmpt){
		errorMessage += "Passwords do not match\n";
	}
     if((email == null) || (email == "")) {
        errorMessage += "Enter email\n";
    }
    
	 if((forename == null) || (forename == "")) {
        errorMessage += "Enter forename\n";
    }
	 if((surname == null) || (surname == "")) {
        errorMessage += "Enter surname\n";
    }
	if(errorMessage != "") {
        alert(errorMessage);
    }
    return (error == "");
}