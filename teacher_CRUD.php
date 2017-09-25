<?php 
     include_once 'db_connection.php';
	 include_once 'function.php';
	 include_once 'session.php';
	 ?>
  <?php   if (isset($_GET["id"])) {
		  $teacher_id =$_GET["id"] ;
	     }
	 ?>
	
    
  <?php      
		class crudOp extends db_connection{
			
		public function __construct(){
			 $this->connect();
			    }
		  
		  public function insert_teacher($teacher_name, $teacher_fname, $teacher_date_of_birth, $teacher_gender, $teacher_cnic_no,$teacher_qualification, $teacher_experience, $teacher_phone_no, $teacher_email, $teacher_address) {
		 	
			$insert_teachers  = "INSERT INTO teacher_registration (teacher_name, teacher_fname, teacher_date_of_birth,
                			teacher_gender, teacher_cnic_no, teacher_qualification, teacher_experience, teacher_phone_no,
							teacher_email, teacher_address) VALUES ('{$teacher_name}', '{$teacher_fname}',
							 '{$teacher_date_of_birth}', '{$teacher_gender}','{$teacher_cnic_no}', '{$teacher_qualification}', 
							 '{$teacher_experience}', '{$teacher_phone_no}','{$teacher_email}', '{$teacher_address}')";
			 $insert = $this->conn->query($insert_teachers);
			 if($insert){
				//Success
					$_SESSION["message"] = "Teacher created successfully.";
					redirect_to("teacher_reg.php");
				} else {
				//Failure
				  $_SESSION["message"] = "Teacher creation failed.";
				redirect_to("teacher_reg.php");
				}
			  
		  }
		    public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM teacher_registration") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}
		// delete teacher
		public function delete_teacher($teacher_id){
			$delete = "DELETE FROM teacher_registration WHERE teacher_id = {$teacher_id}";
			$deleted = $this->conn->query($delete);
			if($deleted){
				//Success
					$_SESSION["message"] = "Teacher deleted successfully.";
					redirect_to("teacher_record.php");
				} else {
				//Failure
				  $_SESSION["message"] = "Teacher deleted  failed.";
				redirect_to("teacher_record.php");
				}
		}
		// fetch selected_teacher
		public function selected_teacher($teacher_id){
			$stmt = $this->conn->prepare("SELECT * FROM teacher_registration WHERE teacher_id = {$teacher_id}") 
			        or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}
		 // update teacher
		public function edit_teacher($teacher_id, $teacher_name, $teacher_fname, $teacher_date_of_birth, $teacher_gender, 
				      $teacher_cnic_no,$teacher_qualification, $teacher_experience, $teacher_phone_no, $teacher_email, $teacher_address){
			$update = "UPDATE teacher_registration SET teacher_name = '{$teacher_name}', teacher_fname = '{$teacher_fname}',
			          teacher_date_of_birth = '{$teacher_date_of_birth}', teacher_gender = '{$teacher_gender}',
					  teacher_cnic_no = '{$teacher_cnic_no}', teacher_qualification = '{$teacher_qualification}',
					  teacher_experience = '{$teacher_experience}', teacher_phone_no = '{$teacher_phone_no}', 
					  teacher_email = '{$teacher_email}' WHERE teacher_id ={$teacher_id}";
			if($update){
				//Success
					$_SESSION["message"] = "Teacher edit successfully.";
					redirect_to("teacher_record.php");
				} else {
				//Failure
				  $_SESSION["message"] = "Teacher edit  failed.";
				redirect_to("teacher_record.php");
				}
			 }
		}
?>
        