<?php
include("con1.php");
session_start();
if(!isset($_SESSION['uemail']))
{
	header('Location: login.php');
	return;
}
 {
  $sql = "DELETE FROM task WHERE tid=".$_GET['tid'];
  if ($conn->query($sql) === TRUE) {
    echo  "Record deleted successfully";
	header("Location:comp2.php");
  } else {
    echo "Error deleted record: " . $conn->error;
  }
}

$conn->close();
?>