<?php include '../controllers/studentcontroller.php'; ?>
<?php
    $id = $_GET["id"]; 
    $s = getstudent($id); 
?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>Delete student</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Student Name</h4>
					<input type = "text" name = "name" value="<?php echo $s["name"];?>"/>
					<input type = "hidden" name = "id" value="<?php echo $id;?>"/>
					<span> <?php echo $err_name; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "deletestudent" value = "Delete"/>
				</div>
			</form>
		</div>
	</body>
</html>