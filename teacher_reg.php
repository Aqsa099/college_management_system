<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; 
    ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="well well-sm" style="border-top: 3px solid teal; text-align:center">
        Teacher Registration
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
        <form method="POST" action="insert_teacher.php"> 		
            <div class="form-group">
    			<div class="row">
    				
    				<div class="col-md-5">
    					<label>Teacher Name</label>
    					<input type="text" class="form-control" name="teacher_name" placeholder="Enter Name">
    				</div>
                    <div class="col-md-5">
                        <label>Father Name</label>
                        <input type="text" class="form-control" name="teacher_fname" placeholder="Enter Father Name">
                    </div>
				</div>
				<!--row closed -->
				<div class="row">
    				<div class="col-md-5">
    					<label>Date-of-Birth</label>
    					<input type="text" class="form-control" name="teacher_date_of_birth" placeholder="Enter DOB">
    				</div>
                   
					 <div class="col-md-5">
                        <label>Gender</label>
                            <div class="radio">
                                <label>
                                  <input type="radio" name="teacher_gender" id="optionsRadios1" value="Male" checked>
                                  Male
                                </label>
                                <label>
                                  <input type="radio" name="teacher_gender" id="optionsRadios2" value="Female">Female
                                </label>
                            </div>
                    </div>
				</div>
				<!--row closed -->
				<div class="row">
                    <div class="col-md-5">
                        <label>CNIC</label>
                        <input type="text" class="form-control" name="teacher_cnic_no" placeholder="Enter CNIC">
                    </div>
					<div class="col-md-5">
                        <label>Qualification</label>
                        <input type="text" class="form-control" name="teacher_qualification" placeholder="Enter Qualification">
                    </div>
				</div>
				<!--row closed -->
				<div class="row">
                    <div class="col-md-5">
                        <label>Experience</label>
                        <input type="text" class="form-control" name="teacher_experience" placeholder="Enter Experience">
                    </div>
                    <div class="col-md-5">
                        <label>Phone#</label>
                        <input type="text" class="form-control" name="teacher_phone_no" placeholder="Enter Phone#">
                    </div>
				</div>
				
                <!--row closed -->
				<div class="row">				
				
                    <div class="col-md-5">
                        <label>Email</label>
                        <input type="email" class="form-control" name="teacher_email" placeholder="Enter Email">
                    </div>
                    <div class="col-md-5">
                        <label>Address</label>
                        <input type="text" class="form-control" name="teacher_address" placeholder="Enter Address">
                    </div>
				</div>
				<br />
    			<!--row closed-->
                
                <button  class="btn btn-success" name="submit">Submit</button>
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