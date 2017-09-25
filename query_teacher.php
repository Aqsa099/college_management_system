<?php
   include_once 'teacher_CRUD.php'; ?>
     
	  <?php   if (isset($_GET["id"])) {
		  $teacher_id =$_GET["id"] ;
	     }
	
	 
                if(isset($_POST["submit"])){
					$teacher_name    	   = $_POST["teacher_name"];
					$teacher_fname         = $_POST["teacher_fname"];
					$teacher_date_of_birth = $_POST["teacher_date_of_birth"];
					$teacher_gender   	   = $_POST["teacher_gender"];
					$teacher_cnic_no   	   = $_POST["teacher_cnic_no"];
					$teacher_qualification = $_POST["teacher_qualification"];
					$teacher_experience    = $_POST["teacher_experience"];
					$teacher_phone_no      = $_POST["teacher_phone_no"];
					$teacher_email         = $_POST["teacher_email"];
					$teacher_address       = $_POST["teacher_address"];
					
				$crud = new crudOp();
				$crud->edit_teacher($teacher_id, $teacher_name, $teacher_fname, $teacher_date_of_birth, $teacher_gender, 
				      $teacher_cnic_no,$teacher_qualification, $teacher_experience, $teacher_phone_no, $teacher_email, $teacher_address);
				}
?>