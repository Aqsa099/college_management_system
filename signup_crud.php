<?php
    
     include_once 'db_connection.php';
     include_once 'function.php';
     include_once 'session.php';
	 
	 class crudOp extends db_connection{
			
		public function __construct(){
			 $this->connect();
			    }
	    public function insert_admin($name, $password, $email){
		 	
			 $insert_admin  = "INSERT INTO admin(name, password, email) VALUES ('{$name}', '{$password}', '{$email}')";
			 $insert = $this->conn->query($insert_admin);
			 if($insert){
			//Success
				$_SESSION["message"] = "Admin created successfully.";
				redirect_to("login.php");
		    } else {
			//Failure
			  $_SESSION["message"] = "Admin creation failed.";
			redirect_to("sign_up.php");
                 }
			 }
		  }
		
?>