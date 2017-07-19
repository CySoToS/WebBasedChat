<?php
    include_once("model/Model.php");
    session_start(); 

    class Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = new Model();
        }

        public function invoke()
        {
            $command = isset($_REQUEST["cmd"])? $_REQUEST["cmd"] : "mainpage";
            
            if($command == "mainpage")
            {
                if((isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true)){
                    $this->includeUserPage();
                }
                else
                {
                include("view/html/login.php");
                }
            }
            
            elseif($command == "createaccount")//no changes needed
            {
                include("view/html/register.php");
            }
            elseif($command == "loginpage"){
                include("view/html/login.php");
            }    
            elseif($command == "login")//minor changes needed
            {
                
                $username = (isset($_POST["username"])) ? $this->parse_input($_POST["username"]) : "";
                $password = (isset($_POST["password"])) ? $this->parse_input($_POST["password"]) : "";
                
                $res = $this->model->checkLoginCredentials($username, $password);
                               
                if($res == True)
                {
                     
                    $_SESSION['loggedin'] = true;
                    $_SESSION['usename'] = $username;
                    //get the users page.
                    $this->includeUserPage();
                }
                else
                {
                    echo "combination of Username and Password is non-exsisting";
                    include("view/html/login.php");
                }
            }
            
            elseif($command == "register")//changes needed for the login
            {
                $forename = (isset($_POST["forename"])) ? $this->parse_input($_POST["forename"]) : "";
                $surname = (isset($_POST["surname"])) ? $this->parse_input($_POST["surname"]) : "";
                $username = (isset($_POST["username"])) ? $this->parse_input($_POST["username"]) : "";
                $password = (isset($_POST["password"])) ? $this->parse_input($_POST["password"]) : "";
                $email = (isset($_POST["email"])) ? $this->parse_input($_POST["email"]) : "";

                if($email){
                    $validEmail = $this->emailchecker($_POST["email"]);
                }

                $res = false;
                if($validEmail){
                    $res = $this->model->addUser($forename, $surname, $email,$username,$password);
                }        
                else{
                    echo "Invalid Email entered";
                    include("view/html/register.php");
                    return;
                }
                
                if($res == true)
                {
                    echo "registration complete.";
                    include("view/html/login.php");
                    return;
                }
                else{
		    echo "account with the username exists.Please refill the form.";
                    include("view/html/register.php");
                }
            } 
            elseif($command =="userPage")//might be removed.
            {
                
            }
            
            elseif($command == "logout")
            {
                include("view/html/login.php");
                if(isset($_SESSION["loggedin"]))
                {
                    unset($_SESSION["loggedin"]);
                    $_SESSION["username"]="";
                    $_SESSION["loggedin"]=false;
                }
            }
            else
            {
                $this->includeMainPage();
            }
        }
        
        private function parse_input($par)//needed for input parsing
        {
            $par = trim($par);
            $par = stripslashes($par);
            $par = htmlspecialchars($par);
            //$par = mysql_real_escape_string($par);
            $par = htmlspecialchars($par, ENT_IGNORE, 'utf-8');
            $par = strip_tags($par);
            return $par;
        }
        
        private function includeMainPage()//changes should be made here
        {
            //$childen = $this->model->getPlayersFromDB();//change
            //$playedGames = $this->model->getGamesPlayedFromDB();//change
            //$toPlayGames = $this->model->getGamesNotPlayedFromDB();//change
            //$ranking = $this->model->getRankingFromDB();//change
            include("view/html/mainpage.php");
        }
        private function emailchecker($emailCheck){
            if(filter_var($emailCheck, FILTER_VALIDATE_EMAIL)) {
                return true;
            }
            else {
                return false; 

            }            
        }

        private function includeUserPage(){
            //names of the other users
            //chat history
        }
        
    }
?>
