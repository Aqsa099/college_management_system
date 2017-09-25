<!DOCTYPE html>
<?php require_once("session.php"); ?>


<?php
        define("DB_SERVER","localhost");
		define("DB_USER","root");
		define("DB_PASS","");
		define("DB_NAME","attendance_management_system");
		$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
		if(!$connection){
			echo "connection failed";
		}
		if(isset($_POST['submit'])){
			$username = $_POST["name"];
			$password = $_POST["password"];
			//QUERY
			$query = "SELECT * FROM admin WHERE name='$username' AND password='$password' LIMIT 1";
			$result = mysqli_query($connection,$query);
			if ($result && mysqli_affected_rows($connection)==1){
				$founduser=mysqli_fetch_assoc($result);
				$_SESSION["name"] = $founduser["name"];
				header("Location:"."admin_view.php");
			   }
			else{
			$_SESSION["message"] = "Username/Password not found.";
		    }
		}
?>

<html>
<head>
        <title> login form </title>
		<meta charset="utf-8"> 
			<link rel="stylesheet" href="dist/css/bootstrap.min.css">      		
			<link rel="stylesheet" href="dist/css/style.css">      		
			
</head>
<body class="body">
    <div class="container-fluid">
	    <div class="bg">
		    
			<img class="img" src="dist/img/logo.png" alt="User Image">
			<h1> Superior Group of Colleges </h1> 
            <hr/>
			<h1> Login Form</h1>	<br/>
			 
			   <?php echo message(); ?>			
			   <form  method="POST" style="width:50%; margin-left:150px;">
				<div class="form-group">
				  <label for="email">User Name:</label>
				  <input type="text" class="form-control"  placeholder="Enter user name" name="name">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control"  placeholder="Enter password" name="password">
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" name="remember"> Remember me </label>
				</div>
				<button type="submit" class="btn" style="background-color:#007A7F; color:white" name="submit">LogIn</button>
				<button type="submit" class="btn" style="background-color:#007A7F; color:white"><a href ="sign_up.php" 
				style="text-decoration:none; color:white;">SignUp</a></button>
			</form>
		</div>   
	</div>    
</body>
</html>