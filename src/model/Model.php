<?php
    require_once 'model/Database.php';
    
    class Model {
        public function addUser($forename, $surname, $email, $username, $password){
            if($this->checkUserExist($username)){
                return false;
            }
            $options = ["salt" => "9fda749430593bd5a5c01b"];
            $hasAndSalt = password_hash($password, PASSWORD_BCRYPT, $options);
            
            $db = Database::getInstance();
            $conn = $db->getConnection();
            $stmt = $conn->prepare("INSERT INTO accounts_users (FORENAME, SURNAME, EMAIL, USERNAME, PASSWORD, is_active)
                    VALUES (?, ?, ?, ?, ?, 0)");
            $stmt->bindParam(1, $forename);
            $stmt->bindParam(2, $surname);
            $stmt->bindParam(3, $email);
            $stmt->bindParam(4, $username);
            $stmt->bindParam(5, $hasAndSalt); 
            $stmt->execute();
            
            return true;
        }
        
        public function checkLoginCredentials($username,$password){
            $db = Database::getInstance();
            $conn = $db->getConnection();
            $options = ["salt" => "9fda749430593bd5a5c01b"];
            $hash = password_hash($password, PASSWORD_BCRYPT, $options);
            $stmt = $conn->prepare('SELECT USERNAME,PASSWORD FROM accounts_users WHERE USERNAME = ? AND PASSWORD = ?');
            $stmt->bindParam(1, $username);
            $stmt->bindParam(2, $hash);
            $stmt->execute();
            return ($stmt->rowCount() > 0);
        }
        
        private function checkUserExist($username){
            $db = Database::getInstance();
            $conn = $db->getConnection();
            $stmt = $conn->prepare("SELECT * FROM accounts_users WHERE USERNAME = ?");
            $stmt->bindParam(1, $username);
            $stmt->execute();
            return ($stmt->rowCount() > 0);
        }
    }
?>
