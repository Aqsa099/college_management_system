<?php //include_once 'session.php';
     include_once 'db_connection.php';
     
        
		class crud extends db_connection{
			
		public function __construct(){
			 $this->connect();
			    }
	   public function insert($program_name, $session){
		$program = "INSERT INTO programs (program_name, session) VALUES ('{$program_name}', '{$session}')";
		$insert = $this->conn->query($program);
		}
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM programs") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
	   }
	}
?>