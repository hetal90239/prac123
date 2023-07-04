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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">         
</head>
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
	<th>Delete</th>
  </tr>
  <tr>
  <?php
include("con1.php");

$eve = "SELECT * FROM task where tstatus='completed'";
$result = $conn->query($eve);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  ?>
    <td><?php echo $row['tid'];?></td>
    <td><?php echo $row['uid'];?></td>
    <td><?php echo $row['tstatus'];?></td>
    <td><?php echo $row['tdetail'];?></td>
     
						
	<td><a href="delete.php?tid=<?php echo $row['tid'];?> " ><i class="fa fa-trash-o"></i></a></td>

    
  </tr>
  <?php
  }
}
  ?>
   
</table>



</body>
</html>

