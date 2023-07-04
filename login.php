<!DOCTYPE html>
<html>
<body>

<head>

<link rel="stylesheet" type="text/css" href="style2.css">
<style>
body {
	background-color: #19A7CE;
	}
	h2{
	 margin-top: 200px;
	}
h1   {color: blue;}
p    {color: red;}
input[type=submit] {
	  background-color: #FFFFFF; /* white */
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
	border-radius: 500%;
	}
	input[type=email,password]{
		hight=500px;
		width=500px;
	}
</style>

</head>
<div>
<center>
<h2>LOGIN FORM</h2>


<form action="login2.php" method="post">
  <label for="uemail">EMAIL</label><br><br>
  <input type="email" id="uemail" name="uemail"style="width:200px;hight=200px;" required><br><br>
  
  <label for="upassword">PASSWORD</label><br><br>
  <input type="password" id="upassword" name="upassword"style="width:200px;hight=200px;" required><br><br>
  
 
  <input type="submit" value="Submit">
</form>

</div>
</body>
</center>
</html>