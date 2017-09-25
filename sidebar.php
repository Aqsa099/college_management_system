 <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Superior College</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
       <ul class="sidebar-menu" data-widget="tree">
                
				<!-- first <li> for teacher registration and record -->
				 <li class="treeview">
				  <a href="#"><i class="fa fa-link"></i> <span>Teacher</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					  </span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="teacher_reg.php">Add new teacher</a></li> 
					<li><a href="teacher_record.php">Teacher record</a></li> 
				  </ul>
				</li>
				
				<!-- second <li> for student registration and record -->
				<li class="treeview">
				  <a href="#"><i class="fa fa-link"></i> <span>Student</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					  </span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="std_registration.php">Add new student</a></li>
					<li><a href="students_record.php">Student record</a></li>
					
				  </ul>
				</li>
				
				<!-- Third <li> for Department -->
				<li class="treeview">
						 <a href="#"><i class="fa fa-link"></i> <span>Department</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								  </span>
							</a>				
					
					<!--<ul> inside the departement <li> for programs -->	
					<ul class="treeview-menu">
					 
					 <!--first <li> of department -->	
						<li class="treeview">
							<a href="#"><i class="fa fa-link"></i> <span>Computer science</span>
										<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
										</span>
							</a>
						   
							<ul class="treeview-menu">
								<li class="treeview">
								<a href="#"> <span>BSCS(2014-2018)</span>
							    <span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>								
							    </span>
					            </a>
								    <ul class="treeview-menu">
										<li class="treeview">
										<a href="#"> <span>Semester-6</span>
										<span class="pull-right-container">
										</span>
										</a>
										</li>
										<li><a href="add_semester.php">Add new Semester</a></li>
								    </ul>
								    
								</li>
								<li><a href="add_program.php">Add new Program</a></li> 
								
				    			</ul>
				        </li>
						<li><a href="add_department.php">Add new Department</a></li> 
						<li><a href="departmet_record.php">Department Record</a></li>
			        </ul>
					<!-- programs <ul> closed -->
		        </li>
				<!--department <li> closed -- >
		
				<!--close -->
				<!-- attendance -->
				<li class="treeview">
						<a href="#"><i class="fa fa-link"></i> <span>Attendance</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								  </span>
					    </a>				
					
			        <ul class="treeview-menu">
						<li class="treeview">
							<a href="#"><i class="fa fa-link"></i> <span>Computer science</span>
										<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
										</span>
							</a>
							<ul class="treeview-menu">
								<li class="treeview">
								<a href="#"> <span>BSCS(2014-2018)</span>
								<span class="pull-right-container">
								</span>
								</a>
									<ul class="treeview-menu">
										<li class="treeview">
										<a href="attendance.php"> <span>Semester-6</span>
										<span class="pull-right-container">
										</span>
										</a>
										</li>
									</ul>
									
								</li>
							</ul>
						</li>
					</ul>
				</li>
		<!--close-->
		
		<!-- <li> attendance status -->
        <li class="treeview">
		         <a href="#"><i class="fa fa-link"></i> <span>Attendance Status</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						  </span>
				    </a>									
			<ul class="treeview-menu">
				<li class="treeview">
				    <a href="#"><i class="fa fa-link"></i> <span>Computer science</span>
							    <span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							    </span>
					</a>
					<ul class="treeview-menu">
						<li class="treeview">
						<a href="#"> <span>BSCS(2014-2018)</span>
						<span class="pull-right-container">
						</span>
						</a>
							<ul class="treeview-menu">
								<li class="treeview">
								<a href="#"> <span>Semester-6</span>
								<span class="pull-right-container">
								</span>
								</a>
								</li>
							</ul>
							
						</li>
					</ul>
				</li>
			</ul>
		</li>		
        </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

