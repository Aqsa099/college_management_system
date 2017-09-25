<?php 
     include_once 'std_CRUD.php';
	  if (isset($_GET["id"])) {
		$student_id =$_GET["id"] ;
	  }
	?>
 <?php 
     $crud = new crudOp();
	 $crud->delete_student($student_id);
?>