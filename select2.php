<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM registerdetails");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
<style link="style.css"></style>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Name</td>
    <td>Department</td>
    <td>Email</td>
    <td>Password</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <!-- <td><?php echo $row["srollno"]; ?></td> -->
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["dept"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>