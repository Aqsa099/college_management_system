<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="well well-sm" style="border-top: 3px solid teal;text-align:center">
       Add semester
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
	    <div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-7"
    	<div class="box-body">
        <form method="POST" action="add_semester.php"> 		
            <div class="form-group">
    			<div class="row">	
    				<div class="col-md-5">
    					<label>Semester Number</label>
    					<input type="text" class="form-control" name="dep_name" placeholder="Enter semester no">
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