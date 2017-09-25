<?php    
      include_once 'header.php' ?>
<?php include_once 'sidebar.php';?>
     
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="well well-sm" style="border-top: 3px solid teal;text-align:center">
        Student Registration
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
    					<input type="text" class="form-control" name="student_name" placeholder="Enter Student Name">
    				</div>
                    <div class="col-md-5">
                        <label>Father Name</label>
                        <input type="text" class="form-control" name="student_fname" placeholder="Enter Father Name">
                    </div>
				</div>
				<!-- row closed -->
				<div class="row">
    				<div class="col-md-5">
    					<label>Date-of-Birth</label>
    					<input type="text" class="form-control" name="student_date_of_birth" placeholder="Enter DOB">
    				</div>
					<div class="col-md-5">
						    <label>Gender</label>
								<div class="radio">
									<label>
									  <input type="radio" name="student_gender" id="optionsRadios1" value="Male" checked>
									  Male
									</label>
									<label>
									  <input type="radio" name="student_gender" id="optionsRadios2" value="Female">Female
									</label>
								</div>
					</div>
    			</div>
    			<!--row 1 closed-->
    			<div class="row">
                    <div class="col-md-5">
                        <label>CNIC</label>
                        <input type="text" class="form-control" name="student_cnic" placeholder="Enter CNIC">
                    </div>
                    <div class="col-md-5">				    
                        <label>Email</label>
                        <input type="email" class="form-control" name="student_email" placeholder="Enter Email"> 
                    </div>
    			</div>
    			<!--row closed-->
    			<div class="row">
                    <div class="col-md-5">
                        <label>Phone#</label>
                        <input type="text" class="form-control" name="student_phone_no" placeholder="Enter phone#">
                    </div>
                    <div class="col-md-5">
                        <label>Guardian Phone#</label>
                        <input type="text" class="form-control" name="student_guardian_no" placeholder="Enter Gaurdian Phone#">
                    </div>
    			</div>
    			<!--row closed-->
				
    			<div class="row">
				    <div class="col-md-5">
                        <label>Program</label>
                        <input type="text" class="form-control" name="student_program" placeholder="Enter Program">
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
                        <input type="text" class="form-control" name="student_address" placeholder="Enter Address">
                    </div>                      
    			</div><br>
    			<!--row 4 closed-->
                
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