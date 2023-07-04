<?php
session_start();
if(!isset($_SESSION['uemail']))
{
    header('Location: login.php');
    return;
}

include("con1.php");

$tdetail=$_POST['tdetail'];

$eve = "SELECT * FROM user where uemail='{$_SESSION['uemail']}'";

$re = mysqli_query($conn, $eve);

$response = array();
$posts = array();

$uid="0";

if(mysqli_num_rows($re) > 0)
{
    while($rt = mysqli_fetch_assoc($re))
    {
        //$result="1";
        $uid=$rt['uid'];
    }
}

$sql = "INSERT INTO task (uid, tstatus, tdetail) VALUES ('$uid', 'pending', '$tdetail')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header("Location:pen2.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
