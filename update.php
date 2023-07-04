<?php
include("con1.php");
session_start();
if(!isset($_SESSION['uemail']))
{
	header('Location: login.php');	
	return;
}
	 {
  $sql = "UPDATE task SET tstatus='completed' WHERE tid=".$_GET['tid'];
  if ($conn->query($sql) === TRUE) {
    echo  "Record updated successfully";
	header("Location:comp2.php");
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

$conn->close();
?>