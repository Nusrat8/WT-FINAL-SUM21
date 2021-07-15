<?php include 'mainheader.php'; ?>
<?php include 'adminheader.php'; ?>
<?php include '../controllers/CategoryController.php'; ?>
<?php
    $id = $_GET["id"]; 
    $c = getCategory($id); 
?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>Delete Category</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Category Name</h4>
					<input type = "text" name = "name" value="<?php echo $c["name"];?>"/>
					<input type = "hidden" name = "id" value="<?php echo $id;?>"/>
					<span> <?php echo $err_name; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "deleteCategory" value = "Delete"/>
				</div>
			</form>
		</div>
	</body>
    <?php include 'footer.php'; ?>
</html>