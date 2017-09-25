<?php
   include_once 'signup_crud.php';

                if(isset($_POST["submit"])){
                $name      =  $_POST["name"];
                $password  = $_POST["password"];
                $email     = $_POST["email"];
				
				$crud = new crudOp();
				$crud->insert_admin($name, $password, $email );
				}
?>