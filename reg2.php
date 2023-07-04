<?php
include("con1.php");
$p1=$_POST['uemail'];
$p2=$_POST['upassword'];
$p3=$_POST['uname'];
$p4=$_POST['mobile'];
$p5=$_POST['city'];

$eve="INSERT INTO user(uemail,upassword,uname,mobile,city)VALUES('$p1','$p2','$p3','$p4','$p5')";
if($conn->query($eve)==TRUE){
	
	echo "Insert data successfully";
	$_SESSION['uemal']=$row['uemail'];
	$_SESSION['upassword']=$row['upassword'];
	$_SESSION['uname']=$row['uname'];
	$_SESSION['mobile']=$row['mobile'];
	$_SESSION['city']=$row['city'];
	header("Location:login.php");
	
	
}
else{
	echo "ERROR:".$eve."<br>".$conn->error;
}
$conn->close;
?>