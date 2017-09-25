 
<?php include_once 'db_connection.php';
     include_once 'function.php';
      include_once 'session.php';?>
<?php 
     class crudOp extends db_connection{
			
		public function __construct(){
			 $this->connect();
			    }
		  
		  public function insert_student($student_name, $student_fname, $student_date_of_birth, $student_gender, 
                    		  $student_cnic,$student_email, $student_phone_no, $student_guardian_no, $student_program, $student_session, $student_address){
		 	
			$insert_students  = "INSERT INTO student_registration (student_name, student_fname, student_date_of_birth,
			                     student_gender, student_cnic, student_email, student_phone_no, student_guardian_no,
								 student_program, student_session, student_address) VALUES ('{$student_name}',
								 '{$student_fname}', '{$student_date_of_birth}', '{$student_gender}', '{$student_cnic}',
								 '{$student_email}', '{$student_phone_no}', '{$student_guardian_no}', '{$student_program}',
								 '{$student_session}', '{$student_address}')";
			 $insert = $this->conn->query($insert_students);
				 if($insert){
				//Success
					$_SESSION["message"] = "Student created successfully.";
					redirect_to("std_registration.php");
				} else {
				//Failure
				  $_SESSION["message"] = "Student creation failed.";
				redirect_to("sign_up.php");
				}
			 
				 }
			 
			   
		    public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM student_registration") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}
		 // delete student
		public function delete_student($student_id){
			$delete = "DELETE FROM student_registration WHERE student_id = {$student_id}";
			$deleted = $this->conn->query($delete);
			if($deleted){
				//Success
					$_SESSION["message"] = "Student deleted successfully.";
					redirect_to("students_record.php");
				} else {
				//Failure
				  $_SESSION["message"] = "Student deleted  failed.";
				redirect_to("students_record.php");
				}
			}
		// fetch selected_student
		public function selected_student($student_id){
			$stmt = $this->conn->prepare("SELECT * FROM student_registration WHERE student_id = {$student_id}") 
			        or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}
		}
?>
        
    	