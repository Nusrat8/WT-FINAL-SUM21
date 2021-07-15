<?php
    include '../models/db_config.php';
    $name="";
    $err_name="";
	$err_db="";
	$hasError = false;

    if(isset($_POST["addCategory"])){
		if(empty($_POST["name"])){
		    $err_name = "Category Name Requird";
			$hasError = true;
	    }
		else{
			$name= $_POST["name"];
		}
		if(!$hasError){
			$rs = insertCategory($name);
			if($rs === true){
				header("Location: allcategory.php");
			}
			$err_db = $rs;
		}
	}
	else if(isset($_POST["updateCategory"])){
		if(empty($_POST["name"])){
		    $err_name = "Category Name Requird";
			$hasError = true;
	    }
		else{
			$cname= $_POST["name"];
		}
		if(!$hasError){
			$rs = updateCategory($name, $_POST["id"]);
			if($rs === true){
				header("Location: allcategory.php");
			}
			$err_db = $rs;
		}
	}
		else if(isset($_POST["deleteCategory"])){
		if(empty($_POST["name"])){
		    $err_name = "Category Name Requird";
			$hasError = true;
	    }
		else{
			$cname= $_POST["name"];
		}
		if(!$hasError){
			$rs = deleteCategory($name, $_POST["id"]);
			if($rs === true){
				header("Location: allcategory.php");
			}
			$err_db = $rs;
		}
	}
	
	function insertCategory($name){
		$query = "insert into categories values (NULL,'$name')";
		return execute($query);
	}
	function getAllCategories(){
		$query = "select * from categories";
		$rs = get($query);
		if(count($rs)>0){
			return $rs;
		}
		return false;
	}
	function getCategory($id){
		$query = "select * from categories where id=$id";
		$rs = get($query);
		if(count($rs)>0){
			return $rs[0];
		}
		return false;
	}
	function updateCategory($name,$id){
		$query = "update categories set name='$name' where id=$id";
		$rs = execute($query);
		return $rs;
	}
	function deleteCategory($name,$id){
		$query = "delete from categories where id=$id";
		$rs = execute($query);
		return $rs;
	}
	
	
	
?>