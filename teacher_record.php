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
              <h3 class="box-title">Teacher Information</h3>
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
				  <th> Phone No</th>
                  <th>Experience</th>
                  <th>Qualification</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Delete</th>
				  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
               <?php
					require 'teacher_CRUD.php';
					$conn = new crudOp();
					$read = $conn->read();
					while($fetch = $read->fetch_array()){ 
				?>
					<tr>
						<td><?php echo $fetch['teacher_name']?></td>
						<td><?php echo $fetch['teacher_fname']?></td>
						<td><?php echo $fetch['teacher_date_of_birth']?></td>
						<td><?php echo $fetch['teacher_gender']?></td>
						<td><?php echo $fetch['teacher_phone_no']?></td>
						<td><?php echo $fetch['teacher_cnic_no']?></td>
						<td><?php echo $fetch['teacher_experience']?></td>
						<td><?php echo $fetch['teacher_qualification']?></td>
						<td><?php echo $fetch['teacher_email']?></td>
						<td><?php echo $fetch['teacher_address']?></td>
						<td align="center"> <a href="delete_teacher.php?id=<?php echo $fetch['teacher_id'];?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
						</td>
						<td align="center"><a href="edit_teacher.php?id=<?php echo $fetch['teacher_id'];?>">
							<i class="glyphicon glyphicon-edit"></i></a>
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