<?php
	
	class db_connection{	
		public $host = "localhost";
		public $user = "root";
		public $pass = "";
		public $dbname = "attendance_management_system";
		public $conn;
		public function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			
		}
	}	
?>