<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-md-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Student Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php echo  message();?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Father Name</th>
                  <th>Date of Birth</th>
                  <th>Gender</th>
                  <th>CNIC</th>
                  <th>Email</th>
                  <th>Phone No</th>
                  <th>Guardian No</th>
                  <th>Program</th>
                  <th>Session</th>
                  <th>Address</th>
                  <th>Delete</th>
				  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
				
               <?php
					require 'std_CRUD.php';
					$conn = new crudOp();
					$read = $conn->read();
					while($fetch = $read->fetch_array()){ 
				?>
					<tr>
						
						<td><?php echo $fetch['student_name']?></td>
						<td><?php echo $fetch['student_fname']?></td>
						<td><?php echo $fetch['student_date_of_birth']?></td>
						<td><?php echo $fetch['student_gender']?></td>
						<td><?php echo $fetch['student_cnic']?></td>
						<td><?php echo $fetch['student_email']?></td>
						<td><?php echo $fetch['student_phone_no']?></td>
						<td><?php echo $fetch['student_guardian_no']?></td>
						<td><?php echo $fetch['student_program']?></td>
						<td><?php echo $fetch['student_session']?></td>
					    <td><?php echo $fetch['student_address']?></td>
						<td align="center"><a href="delete_student.php?id=<?php echo $fetch['student_id'];?>">
							<i class="glyphicon glyphicon-remove-circle"></i></a>
						</td>
						<td align="center"><a href="edit_student.php?id=<?php echo $fetch['student_id'];?>">
							<i class="glyphicon glyphicon-edit"></i>
						</td>
					</tr>
				<?php
					}
				?>	
				</tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.section content -->
</div>
<!-- /.content -->

<?php include_once 'footer.php'; ?>	