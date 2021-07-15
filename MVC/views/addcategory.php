<?php include 'mainheader.php'; ?>
<?php include 'adminheader.php'; ?>
<?php include '../controllers/CategoryController.php'; ?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>Add Category</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Category Name</h4>
					<input type = "text" name = "name"/>
					<span> <?php echo $err_name; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "addCategory" value = "Add Category"/>
				</div>
			</form>
		</div>
	</body>
    <?php include 'footer.php'; ?>
</html>