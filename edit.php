<?php

require_once ('dbh.php');
$sql = "SELECT * FROM `employee`";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$emp_code = mysqli_real_escape_string($conn, $_POST['emp_code']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$designation = mysqli_real_escape_string($conn, $_POST['designation']);
	$joining_date = mysqli_real_escape_string($conn, $_POST['joining_date']);;
	//$salary = mysqli_real_escape_string($conn, $_POST['salary']);





	// $result = mysqli_query($conn, "UPDATE `employee` SET `emp_id`='$emp_id',`name`='$name',`email`='$email',`mobile_no`='$mobile_no',`dept`='$dept',`designation`='$designation',`joining_date`='$joining_date' WHERE id=$id");


$result = mysqli_query($conn, "UPDATE `employee` SET `emp_id`='$emp_id',`name`='$name',`email`='$email',`mobile_no`='$mobile_no',`dept`='$dept',`designation`='$designation',`joining_date`='$joining_date' WHERE id=$id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");
	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$emp_id = $res['emp_id'];
	$name = $res['name'];
	$email = $res['email'];
	$mobile_no = $res['mobile_no'];
	$dept = $res['dept'];
	$designation = $res['designation'];
	$joining_date = $res['joining_date'];
	
}
}

?>

<html>
<head>
	<title>View Employee</title>
	<!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
	<header>
		<nav>
			<h1>XYZ Corp.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	

		<!-- <form id = "registration" action="edit.php" method="POST"> -->
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Employee Info</h2>
                    <form id = "registration" action="edit.php" method="POST">


                        <div class="input-group">
                            <input class="input--style-1" type="number" name="emp_id" value="<?php echo $emp_id;?>" >
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" name="name" value="<?php echo $name;?>" >
                        </div>


                        <div class="input-group">
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" name="mobile_no" value="<?php echo $mobile_no;?>">
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="dept" value="<?php echo $dept;?>">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" name="designation" value="<?php echo $designation;?>">
                        </div>

                        
                         <div class="input-group">
                            <input class="input--style-1" type="date"  name="joiningDate" value="<?php echo $joiningDate;?>">
                        </div>

                       
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
</body>
</html>
