<?php    
      include_once 'header.php'; 
      include_once 'sidebar.php'; 
      require 'std_CRUD.php';?>
	  
 <?php   if (isset($_GET["id"])) {
		  $student_id =$_GET["id"] ;
	     }
	 ?>
<?php
		// fetch data of selected teacher
		  $select = new crudOp();
		  $read = $select->selected_student($student_id); 
		  $fetch = $read->fetch_array();
	   ?> 
     
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="well well-sm" style="border-top: 3px solid teal;text-align:center">
        Edit Student
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
        <form method="POST" action="std_insert.php"> 		
            <div class="form-group">
    			<div class="row">
    				
    				<div class="col-md-5">
    					<label>Student Name</label>
    					<input type="text" class="form-control" name="student_name" value=<?php echo 
						   htmlentities($fetch["student_name"]);?> ">
    				</div>
                    <div class="col-md-5">
                        <label>Father Name</label>
                        <input type="text" class="form-control" name="student_fname" value=<?php echo 
						htmlentities($fetch["student_fname"]);?> ">
                    </div>
				</div>
				<!-- row closed -->
				<div class="row">
    				<div class="col-md-5">
    					<label>Date-of-Birth</label>
    					<input type="text" class="form-control" name="student_date_of_birth" value=<?php echo 
						htmlentities($fetch["student_date_of_birth"]);?> ">
    				</div>
					<div class="col-md-5">
						    <label>Gender</label>
								<div class="radio">
									<label>
									  <input type="radio" name="student_gender" id="optionsRadios1" value="Male" 
									   <?php if($fetch["student_gender"]== "Male"){
									    echo "checked";
                                         }   ?> />
									  Male
									</label>
									<label>
									  <input type="radio" name="student_gender" id="optionsRadios2" value="Female"
									  <?php if($fetch["student_gender"]== "Female"){
									  echo "checked";
                                         }   ?> />Female
									</label>
								</div>
					</div>
    			</div>
    			<!--row 1 closed-->
    			<div class="row">
                    <div class="col-md-5">
                        <label>CNIC</label>
                        <input type="text" class="form-control" name="student_cnic" value=<?php echo 
						htmlentities($fetch["student_cnic"]);?> ">
                    </div>
                    <div class="col-md-5">				    
                        <label>Email</label>
                        <input type="email" class="form-control" name="student_email" value=<?php echo 
						 htmlentities($fetch["student_email"]);?> "> 
                    </div>
    			</div>
    			<!--row closed-->
    			<div class="row">
                    <div class="col-md-5">
                        <label>Phone#</label>
                        <input type="text" class="form-control" name="student_phone_no" value=<?php echo 
						htmlentities($fetch["student_phone_no"]);?> ">
                    </div>
                    <div class="col-md-5">
                        <label>Guardian Phone#</label>
                        <input type="text" class="form-control" name="student_guardian_no" value=<?php echo 
						 htmlentities($fetch["student_guardian_no"]);?> ">
                    </div>
    			</div>
    			<!--row closed-->
				
    			<div class="row">
				    <div class="col-md-5">
                        <label>Program</label>
                        <input type="text" class="form-control" name="student_program" value=<?php echo 
						 htmlentities($fetch["student_program"]);?> ">
                    </div>
                    <div class="col-md-5">
                        <label>Session</label>
                        <select class="form-control" name="student_session">
                            <option value="2014-2018">2014-2018</option>
                            <option value="2015-2019">2015-2019</option>
                            <option value="2016-2020">2016-2020</option>
                            <option value="2017-2021">2017-2021</option>
                        </select>
                    </div>
                    
				</div>
				<!--row closed -->
				<div class="row">
                    <div class="col-md-5">
                        <label>Address</label>
                        <input type="text" class="form-control" name="student_address" value=<?php echo 
						htmlentities($fetch["student_address"]);?> ">
                    </div>                      
    			</div><br>
    			<!--row 4 closed-->
                
                <button  class="btn btn-success" name="submit"> Update</button>
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
