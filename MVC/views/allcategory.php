<?php include 'mainheader.php'; ?>
<?php include 'adminheader.php'; ?>
<?php include '../controllers/CategoryController.php'; ?>
<?php $categories = getAllCategories(); ?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>All Categories</h3>
			<h5><?php echo $err_db; ?></h5>
			<table>
			    <thead>
				    <th>SL#</th>
					<th>Name</th>
					
				</thead>
				<tbody>
				    <?php
                        $i = 1;
						foreach($categories as $c){
							echo "<tr>";
							    echo "<td>$i</td>";
								 echo "<td>".$c["name"]."</td>";
								echo '<td><a href = "editcategory.php?id='.$c["id"].'">Edit</td>';
								echo '<td><a href = "deletecategory.php?id='.$c["id"].'">Delete</td>';
								
								
							echo "</tr>";
							$i++;
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
    <?php include 'footer.php'; ?>
</html>