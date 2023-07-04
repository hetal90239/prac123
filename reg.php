<!DOCTYPE html>
<html>
<body>

<head>

<style>
body {
	background-color: #19A7CE;
	}
	h2{
	 margin-top: 100px;
	}
h1   {color: blue;}
p    {color: red;
}
REGSTRATION FORM input[type=submit] {
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
  

}
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

</style>

<title> REGSTRATION </title>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
<script>
  function onSubmit(token) {
    document.getElementById("reg-form").submit();
  }
</script>
</head>

<div>
<center>
<h2>REGSTRATION FORM</h2>


<form action="reg2.php" method="post">

  <label for="uemail">EMAIL</label><br>
  <input type="email" id="uemail" name="uemail" required><br><br>
  
  <label for="password">PASSWORD</label><br>
  <input type="password" id="upassword" name="upassword" required><br><br>
  
  <label for="uname">NAME</label><br>
  <input type="text" id="uname" name="uname" required><br><br>
  
  
  <label for="mobile">MOBILE</label><br>
  <input type="number_format" id="mobile" name="mobile" required><br><br>
  
  <label for="city">CITY</label><br>
  <input type="text" id="city" name="city" required><br><br>
  
  <div class="g-recaptcha" data-sitekey="6LfFCaYlAAAAAO__Uu5kfMY7f3d6gz8IdMVg-zMy"></div>
  
  <input type="submit"  value="Submit">
  </center>
  

</form>

</div>
</body>
</html>
<script>
  function validateForm() {
    var response = grecaptcha.getResponse();
    if (response.length == 0) {
      alert("Please complete the reCAPTCHA");
      return false;
    } else {
      return true;
    }
  }
</script>