<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>  
<!doctype html>  
<html>  
<head>  
<title>Welcome</title>  
    
<link rel="stylesheet" href="homestyle.css">
<style>   
        body{  
              
    margin-top: 100px;  
    background-image: url('img/bg.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;	
	color: white; 
     
    font-size: 100%  
      
        }  
           
          
    </style>  
</head>  
<body>
<div class="w3-top">
	<div class="w3-bar w3-white w3-wide w3-padding w3-card">
		<a href="userdashboard.php" class="w3-bar-item w3-button"><b> MTB </b></a>
		<!-- Float links to the right. Hide them on small screens -->
		<div class="w3-right w3-hide-small">
			Welcome,<?=$_SESSION['sess_user'];?> <a href="logout.php">Logout</a>
		</div>
	</div>
</div>   

WE DO IT. SUCCESSFULLY CREATED REGISTRATION AND LOGIN FORM USING PHP AND MYSQL  
</p>  


</body>  
</html>  
<?php  
}  
?>  