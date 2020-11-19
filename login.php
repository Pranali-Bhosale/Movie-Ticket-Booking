<!doctype html>  
<html>  
<head>  
<title>Login</title>  
<style>   
body
{  
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-image: url('img/bg.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;	
	color: white;  
    font-family: verdana;  
    font-size: 100%    
}  
a {
  color: white;
}
input[type=text], input[type=password] 
{
	 width: 100%;
	 padding: 12px 20px;
	 margin: 8px 0;
	 display: inline-block;
	 border: 1px solid #ccc;
	 box-sizing: border-box;
}
h1 
{  
    color: White;  
    font-family: verdana;  
    font-size: 100%;  
}  
h3 
{  
    color: white;  
    font-family: verdana;  
    font-size: 100%;  
} 
input[type=submit] {
  float: right;
  background-color: black;
  color: white;
  padding: 1% 2%;
  border: 1%;
  border-radius: 1%;
  cursor: pointer; 
font-size: 17px;
}
</style>  
<link rel="stylesheet" href="homestyle.css">

</head>  
<body>  
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="Home.php" class="w3-bar-item w3-button"><b> MTB </b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="login.php" class="w3-bar-item w3-button">login</a>
      <a href="register.php" class="w3-bar-item w3-button">Register</a>
    </div>
  </div>
</div>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mtb";
 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<div class="w3-content " style="max-width:1564px; padding-top: 5%; padding-left: 20%; padding-right: 20%;">
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="login">
	<center><h3>Login Form</h3></center>
	<form action="" method="POST">  
		Email-id: <input type="text" name="mail_id"><br />  
		Password: <input type="password" name="pass"><br />   
		<input type="submit" value="Login" name="submit" />  
	</form>  
</header>
</div>
<?php 
if(isset($_POST["submit"])){  
  
	if(!empty($_POST['mail_id']) && !empty($_POST['pass'])) {  
		$mail_id=$_POST['mail_id'];  
		$pass=$_POST['pass'];  
		
		$query="SELECT * FROM login WHERE email_id='".$mail_id."' AND password='".$pass."'";   
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0)  
		{  
			while($row=$result->fetch_assoc())  
			{  
				$dbusername=$row['email_id'];  
				$dbpassword=$row['password'];  
				$dbuser=$row['username'];
			}  
			if($mail_id == $dbusername && $pass == $dbpassword)  
			{  
				session_start();  
				$_SESSION['sess_user']=$dbuser;  
	  
				/* Redirect browser */  
				header("Location: member.php");  
			}  	
		} 
		else if($mail_id == 'admin@gmail.com' && $pass == 'admin123') 
			{
				session_start();  
				$_SESSION['sess_user']=$mail_id;  
	  
				/* Redirect browser */  
				header("Location: index.php");  
			}
		else 
		{  
			echo "Invalid username or password!";  
		}  
	  
	} else {  
		echo "All fields are required!";  
	}  
}  
?> 
<?php 

$conn->close();
?>
</body>  
</html>