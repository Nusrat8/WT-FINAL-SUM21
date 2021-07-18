<?php include '../controllers/studentcontroller.php'; ?>
<?php $categories = getAllstudents(); ?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>All students</h3>
			<h5><?php echo $err_db; ?></h5>
			<table>
			    <thead>
				    <th>SL#</th>
					<th>Name</th>
					
				</thead>
				<tbody>
				    <?php
                        $i = 1;
						foreach($student as $s){
							echo "<tr>";
							    echo "<td>$i</td>";
								 echo "<td>".$s["name"]."</td>";
								echo '<td><a href = "editstudent.php?id='.$c["id"].'">Edit</td>';
								echo '<td><a href = "deletestudent.php?id='.$c["id"].'">Delete</td>';
								
								
							echo "</tr>";
							$i++;
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>