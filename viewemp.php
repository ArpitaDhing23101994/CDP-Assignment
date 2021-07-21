<?php

require_once ('dbh.php');
$sql = "SELECT * from `employee`";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Employee</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>Employees Detail</h1>
			<ul id="navli">
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="alogin.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">Employee Code</th>
				<th align = "center">Name</th>
				<th align = "center">Email</th>
				<th align = "center">Mobile Number</th>
				<th align = "center">Department</th>
				<th align = "center">Designation</th>
				<th align = "center">Joining Date</th>
				
				
				<th align = "center">Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['emp_code']."</td>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['name']."</td>";
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['mobile_no']."</td>";
					echo "<td>".$employee['dept']."</td>";
					echo "<td>".$employee['designation']."</td>";
					echo "<td>".$employee['joiningDate']."</td>";

					echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
		
	
</body>
</html>