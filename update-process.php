<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE studentdetails set srollno=" . $_POST['srollno'] . ", sname='" . $_POST['sname'] . "', email='" . $_POST['email'] . "', dept='" . $_POST['dept'] . "' ,email='" . $_POST['email'] . "' WHERE srollno=" . $_POST['srollno']);
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM studentdetails WHERE srollno=" . $_GET['srollno']);
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="select.php">Student List</a>
</div>
Student Rollno: <br>
<input type="hidden" name="srollno" class="txtField" value="<?php echo $row['srollno']; ?>">
<input type="text" name="srollno"  value="<?php echo $row['srollno']; ?>">
<br>
Student Name: <br>
<input type="text" name="sname" class="txtField" value="<?php echo $row['sname']; ?>">
<br>
Email :<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
Department:<br>
<input type="text" name="dept" class="txtField" value="<?php echo $row['dept']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>