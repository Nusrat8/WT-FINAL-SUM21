<?php
    include '../models/db_config.php';
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
	$err_db="";
	$hasError = false;

   
	if(isset($_POST["login"])){
		
		
		if(empty($_POST["uname"])){
		    $err_uname = "Username Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Requird";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		if(!$hasError){
			if(authenticateUser($uname,$pass)){
				header("Location: dashboard.php");
			}
			$err_db = "User Invalid";
		}
	}
	
	function insertUser($uname,$pass){
		$query = "insert into users values (NULL,'$uname','$pass')";
		return execute($query);
	}
	function authenticateUser($uname,$pass){
		$query = "select * from users where  username='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
?>