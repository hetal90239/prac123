<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<rel="stylesheet" type="text/css" href="style2.css"> 
</head>
<style>
 body {
  background-image: url('images/tms.jpg');
    background-repeat: no-repeat;
  background-attachment: 200px;  
  background-size: 1375px;
}


</style>

<body>
<div class = "h2">
<br><br><br><br>
<h2 align="center" style="color:black; font-size:45px;">HOME PAGE</h2><br>
</div>
<div class ="container">

<center>
<br><br>
 <button style="color:black; width:200px;height:50px" >User:<?php echo $_SESSION['uemail'];?></button><br>
 <br>
</center>

<center>


 <button onclick="window.location.href='comp2.php'" style="color:black; width:200px;height:50px" > Completed Task</button><br>
 <br>
 <br>
 <button  onclick="window.location.href='pen2.php'" style="color:black;width:200px;height:50px" > Pending Task</a></button><br><br><br>

 <button  onclick="window.location.href='newtask.php'" style="color:black;width:200px;height:50px" > New Task</a></button><br>
 
 <br> 
 </center>

  </div>



<br>

<div>

</body>
</html>
