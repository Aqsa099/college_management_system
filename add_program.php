<?php //require_once("session.php"); ?>
<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; 
      include_once 'db_connection.php';
      include_once 'program_crud.php';?>
    <?php   if (isset($_GET["id"])) {
		  $department_id =$_GET["id"] ;
	     }
	 ?>

<?php 
       
	   if(isset($_POST["submit"])){
		  $program_name = $_POST["program_name"];
		  $session      = $_POST["session"];
		   
		   $crud = new crud();
		   $crud->insert($department_id, $program_name, $session);
		  
	   }
	
	?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="well well-sm" style="border-top: 3px solid teal;text-align:center">
       Add Program
      </h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
	    <div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-7"
    	<div class="box-body">
        <form method="POST" action="add_program.php"> 		
            <div class="form-group">
    			<div class="row">	
    				<div class="col-md-5">
    					<label>Program Name</label>
    					<input type="text" class="form-control" name="program_name" placeholder="Enter program Name">
    				</div>
					<div class="col-md-5">
    					<label> Session</label>
    					<input type="text" class="form-control" name="session" placeholder="Enter Session">
    				</div>
				</div> <br />
                <button  class="btn btn-success" name="submit">Submit</button>
    		</div>
			</form>
    	</div>
		</div>
		   <div class="col-md-2">
			</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include_once 'footer.php'; ?>