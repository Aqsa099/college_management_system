<?php 
     include_once 'teacher_CRUD.php';
	  if (isset($_GET["id"])) {
		$teacher_id =$_GET["id"] ;
	  }
	?>
 <?php 
     $crud = new crudOp();
	 $crud->delete_teacher($teacher_id);
?>