<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	//  $roll = $_POST['roll'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
	 $email = $_POST['email'];
	 $pass = $_POST['pass'];
	 $sql = "INSERT INTO registerdetails(`name`,`dept`,`email`,`password`)
	 VALUES ('$name','$dept','$email','$pass')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>