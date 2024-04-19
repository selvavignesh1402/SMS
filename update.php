<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM studentdetailslogin");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Update Student Details</title>
</head>
<body>
<table>
<tr>
<td>Student RollNo</td>
    <td>Student Name</td>
    <td>Email</td>
    <td>Department</td>
<td>Action</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["srollno"]; ?></td>
<td><?php echo $row["sname"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["dept"]; ?></td>
<td><a href="update-process.php?srollno=<?php echo $row["srollno"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>