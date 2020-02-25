<?php
	
	class DbOperations{
		private $conn; 
		
		function __construct(){
			require_once dirname(__FILE__).'/DbConnect.php'; 
			
			$db = new DbConnect(); 
			
			$this->conn = $db->connect(); 
		}
		
		/*CRUD -> C -> CREATE*/
		
		function createUser($username, $pass, $email)
		{
			// Encrypted the password using md5 
			$password = md5($pass); 
			$stmt = $this->conn->prepare("INSERT INTO `users` (`id`, 
			`username`, `password`, `email`) 
			VALUES (NULL, ?, ?, ?);");
			$stmt->bind_param("sss", $username, $password, $email);
			
			if($stmt->execute()){
				return true; 
			} else {
				return false; 
			}
		}
	}
?>