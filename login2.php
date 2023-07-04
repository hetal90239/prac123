 <?php
session_start();
include("con1.php");
$p1=$_POST['uemail'];
$p2=$_POST['upassword'];

$sql = "SELECT * FROM user where uemail='$p1' and upassword='$p2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
	  
	
	  $_SESSION['uemail'] = $row["uemail"];
	  
	  header('Location: home1.php');
	  //echo "success";
	  
    
  }
} else {
  echo "Invalid username or password";
}
$conn->close();
?>