<!DOCTYPE html>

<html>
<head>
        <title> Sign-Up </title>
			<meta charset="UFT-8">
            <meta name="viewport" content="width=device-width , initial-scale=1">
			<link rel="stylesheet" href="dist/css/bootstrap.min.css">      		
			<link rel="stylesheet" href="dist/css/style.css">      		
			
</head>
<body class="body">
    <div class="container-fluid">
	    <div class="bg1">
		    
			<img class="img" src="dist/img/logo.png" alt="User Image">
			<h1> Superior Group of Colleges </h1>		
            <hr/>
			    
			<h1> Create Admin </h1>	<br/>
				<form action="insert_admin.php" method= "POST" style="width:50%; margin-left:150px;">
				<div class="form-group">
				  <label for="email">User Name:</label>
				  <input type="text" class="form-control"  placeholder="Enter user name" name="name">
				</div>
				<div class="form-group">
				  <label for="pwd">Email:</label>
				  <input type="email" class="form-control" placeholder="Enter email" name="email">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" placeholder="Enter password" name="password">
				</div>
				<button type="submit" class="btn" style="background-color:#007A7F; color:white" name="submit">Submit</button>
				
			</form>
		</div>   
	</div>    
</body>
</html>