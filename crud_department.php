 <?php 
     include_once 'db_connection.php';
     include_once 'function.php';
     include_once 'session.php';
     
        
		class crud extends db_connection{
			
		public function __construct(){
			 $this->connect();
			    }
		public function insert($department_name){
			$department = "INSERT INTO department (department_name) VALUES ('{$department_name}')";
			$insert = $this->conn->query($department);
			if($insert){
				//Success
					$_SESSION["message"] = "Deparment  created successfully.";
					redirect_to("add_department.php");
				} else {
				//Failure
				  $_SESSION["message"] = "Admin creation failed.";
				  redirect_to("sign_up.php");
					 }
				 }
		public function read(){
				$stmt = $this->conn->prepare("SELECT * FROM department") or die($this->conn->error);
				if($stmt->execute()){
					$result = $stmt->get_result();
					return $result;
				}
			}
			}
?>