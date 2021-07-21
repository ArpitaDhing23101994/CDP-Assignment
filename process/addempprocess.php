<?php

require_once ('dbh.php');

$emp_code = $_POST['emp_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile_no = $_POST['mobile_no'];
$dept = $_POST['dept'];
$designation = $_POST['designation'];
$joiningDate = $_POST['joiningDate'];


if(in_array($filecheck, $fileextstored)){
    $sql = "INSERT INTO `employee`(`emp_id`, `name`, `email`, `mobile_no`, `dept`, `designation`, `joiningDate`) VALUES ('','$emp_id','$name','$email','$mobile_no','$dept','$gender','$contact','$nid','$address','$dept','$designation','$joiningDate')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;



if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

}

else{

      $sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`,  `address`, `dept`, `degree`, `pic`) VALUES ('','$firstname','$lastName','$email','1234','$birthday','$gender','$contact','$nid','$address','$dept','$degree','images/no.jpg')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

// else{
//     echo ("<SCRIPT LANGUAGE='JavaScript'>
//     window.alert('Failed to Registere')
//     window.location.href='javascript:history.go(-1)';
//     </SCRIPT>");
// }
}






?>