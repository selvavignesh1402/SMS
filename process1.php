<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	//  $roll = $_POST['roll'];
	//  $sname = $_POST['sname'];
	//  $dept = $_POST['dept'];
	 $email = $_POST['email'];
	 $pass = $_POST['pass'];
	 $sql = "INSERT INTO teacherdetailslogin(`email`,`password`)
	 VALUES ('$email','$pass')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>