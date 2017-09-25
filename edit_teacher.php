<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php';
      require 'teacher_CRUD.php';?>

	  <?php   if (isset($_GET["id"])) {
		  $teacher_id =$_GET["id"] ;
	     }
	 ?>
	<?php
		// fetch data of selected teacher
		  $select = new crudOp();
		  $read = $select->selected_teacher($teacher_id); 
		  $fetch = $read->fetch_array();
	   ?>  
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="well well-sm" style="border-top: 3px solid teal; text-align:center">
        Edit Teacher
      </h1>
    </section>
       <?php echo  message();?>
    <!-- Main content -->
    <section class="content container-fluid">
	<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-7"
    	<div class="box-body">
        <form method="POST" action="query_teacher.php"> 		
            <div class="form-group">
    			<div class="row">
    				
    				<div class="col-md-5">
    					<label>Teacher Name</label>
    					<input type="text" class="form-control" name="teacher_name" value=<?php echo 
						htmlentities($fetch["teacher_name"]);?> >
    				</div>
                    <div class="col-md-5">
                        <label>Father Name</label>
                        <input type="text" class="form-control" name="teacher_fname" value=<?php echo 
						htmlentities($fetch["teacher_fname"]);?> >
                    </div>
				</div>
				<!--row closed -->
				<div class="row">
    				<div class="col-md-5">
    					<label>Date-of-Birth</label>
    					<input type="text" class="form-control" name="teacher_date_of_birth" value=<?php echo 
						htmlentities($fetch["teacher_date_of_birth"]);?> >
    				</div>
                   
					 <div class="col-md-5">
                        <label>Gender</label>
                            <div class="radio">
                                <label>
                                  <input type="radio" name="teacher_gender" id="optionsRadios1" value="Male" 
								  <?php if($fetch["teacher_gender"]== "Male"){
									  echo "checked";
                                         }   ?> />
                                  Male
                                </label>
                                <label>
                                  <input type="radio" name="teacher_gender" id="optionsRadios2" value="Female"
								  <?php if($fetch["teacher_gender"]== "Female"){
									  echo "checked";
                                         }   ?> />Female
                                </label>
                            </div>
                    </div>
				
				</div>
				<!--row closed -->
				<div class="row">
                    <div class="col-md-5">
                        <label>CNIC</label>
                        <input type="text" class="form-control" name="teacher_cnic_no" value=<?php echo 
						    htmlentities($fetch["teacher_cnic_no"]);?> >
                    </div>
					<div class="col-md-5">
                        <label>Qualification</label>
                        <input type="text" class="form-control" name="teacher_qualification" value=<?php echo 
						   htmlentities($fetch["teacher_qualification"]);?> >
                    </div>
				</div>
				<!--row closed -->
				<div class="row">
                    <div class="col-md-5">
                        <label>Experience</label>
                        <input type="text" class="form-control" name="teacher_experience" value=<?php echo 
						  htmlentities($fetch["teacher_experience"]);?> >
                    </div>
                    <div class="col-md-5">
                        <label>Phone#</label>
                        <input type="text" class="form-control" name="teacher_phone_no" value=<?php echo 
						      htmlentities($fetch["teacher_phone_no"]);?> >
                    </div>
				</div>
				
                <!--row closed -->
				<div class="row">				
				
                    <div class="col-md-5">
                        <label>Email</label>
                        <input type="email" class="form-control" name="teacher_email" value=<?php echo 
						      $fetch["teacher_email"];?> >
                    </div>
                    <div class="col-md-5">
                        <label>Address</label>
                        <input type="text" class="form-control" name="teacher_address"  value=<?php echo 
						     $fetch["teacher_address"];?> >
                    </div>
				</div>
				<br />
    			<!--row closed-->
                
                <button  class="btn btn-success" name="submit"> Update</button>
    		</div>
			</form>
    	</div>
		</div>
			
		</div>
		
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include_once 'footer.php'; ?>