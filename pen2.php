<?php
session_start();
if(!isset($_SESSION['uemail']))
{
	header('Location: login.php');
	return;
}


?>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<body>

	  

<table style="width:100%">
  <tr>
    <th>no</th>
    <th>userid</th> 
    <th>task status</th>
    <th>task detail</th>
  </tr>
  <tr>
  <?php
include("con1.php");

$eve = "SELECT * FROM task where tstatus='pending'";
$result = $conn->query($eve);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  ?>
    <td><?php echo $row['tid'];?></td>
    <td><?php echo $row['uid'];?></td>
    <td><a href="update.php?tid=<?php echo $row['tid'];?>">
							<?php echo $row['tstatus'];?></a></td>
    <td><?php echo $row['tdetail'];?></td>
	
     </tr>
  <?php
  }
}
  ?>
 
   

</table>



</body>
</html>

