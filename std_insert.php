<?php
   include_once 'std_CRUD.php';
   
  
                if(isset($_POST["submit"])){
                $student_name          = $_POST["student_name"];
			    $student_fname    	   = $_POST["student_fname"];
				$student_date_of_birth = $_POST["student_date_of_birth"];
				$student_gender  	   = $_POST["student_gender"];
				$student_cnic   	   = $_POST["student_cnic"];
				$student_email   	   = $_POST["student_email"];
				$student_phone_no      = $_POST["student_phone_no"];
				$student_guardian_no   = $_POST["student_guardian_no"];
				$student_program       = $_POST["student_program"];
				$student_session       = $_POST["student_session"];
				$student_address   	   = $_POST["student_address"];
				
				
		        $crud = new crudOp();
				
				$insert = $crud->insert_student($student_name, $student_fname, $student_date_of_birth, $student_gender,   $student_cnic,$student_email, $student_phone_no, $student_guardian_no, $student_program, $student_session,
      					         $student_address);
								 
				}
?>