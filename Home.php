
<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="homestyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a 
{
    text-decoration: none !important;
}
.header {
  position: relative;
  width: 100%;
  height: 50%;
  max-width: 400px;
}
#myVideo {
  position: relative;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}
.header video {
  width: 100%;
  height: 100%;
}

.header .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: White;
  font-size: 20px;
  padding: 12px 24px;
  border: 2px solid White;;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.btn:hover {
	background-color: White;
	color:black;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
 
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
</style>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="Home.php" class="w3-bar-item w3-button"><b> MTB </b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#OMovies" class="w3-bar-item w3-button">Ongoing Movies</a>
	  <a href="#UMovies" class="w3-bar-item w3-button">Upcoming Movies</a>
      <a href="#About_us" class="w3-bar-item w3-button">About us</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
	  
    </div>
  </div>
</div>

<!-- Header -->
<div class="header w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <video autoplay muted loop id="myVideo">
  <source src="img/impossible_dream.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
	</video>
  <button class="btn" onclick="document.location ='login.php'">Login</button>
  
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="OMovies">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Ongoing Movies</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <img src="img/4.jpg" alt="House" style="width:100%">
		<div class="w3-display-bottomleft w3-black w3-padding"><a href="member.php">See More Details</a></div>      
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
		<img src="img/4.jpg" alt="House" style="width:100%">
        <div class="w3-display-bottomleft w3-black w3-padding">See More Details</div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
		<img src="img/4.jpg" alt="House" style="width:100%">
        <div class="w3-display-bottomleft w3-black w3-padding">See More Details</div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
		<img src="img/4.jpg" alt="House" style="width:100%">
        <div class="w3-display-bottomleft w3-black w3-padding">See More Details</div>
      </div>
    </div>
  </div>
 </div>
<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="UMovies">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Upcoming Movies</h3>
  </div>
  
  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
		<img src="img/4.jpg" alt="House" style="width:100%">
        <div class="w3-display-bottomleft w3-black w3-padding">See More Details</div>
      </div>
    </div>
	
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <img src="img/4.jpg" alt="House" style="width:100%">
		<div class="w3-display-bottomleft w3-black w3-padding">See More Details</div> 
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <img src="img/4.jpg" alt="House" style="width:100% ">
		<div class="w3-display-bottomleft w3-black w3-padding">See More Details</div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <img src="img/4.jpg" alt="House" style="width:100%">
		<div class="w3-display-bottomleft w3-black w3-padding">See More Details</div>
      </div>
    </div>
  </div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="About_us">
<h2>About us</h2>

Customer needs to register at the site to book tickets to the movie.
After selecting the show, the user is presented a seating layout so that he can select seats of his choice. 
Thereafter he is redirected to the payment gateway for making a transaction.

<p><b>Meet the team </b></p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="img/4.jpg" alt="Boss" style="width:50%" class="w3-circle w3-hover-opacity">
  <h3>Johnny Walker</h3>
  <p>Web Developer</p>
</div>

<div class="w3-quarter">
  <img src="img/4.jpg" alt="Boss" style="width:50%" class="w3-circle w3-hover-opacity">
  <h3>Rebecca Flex</h3>
  <p>Support</p>
</div>

<div class="w3-quarter">
  <img src="img/4.jpg" alt="Boss" style="width:50%" class="w3-circle w3-hover-opacity">
  <h3>Jan Ringo</h3>
  <p>UX Designer</p>
</div>

<div class="w3-quarter">
  <img src="img/4.jpg" alt="Boss" style="width:50%" class="w3-circle w3-hover-opacity">
  <h3>Kai Ringo</h3>
  <p>Marketing Strategist</p>
</div>

</div>
</div>


<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Mumbai, India</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +12 1234567890</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <button type="submit" class="w3-button w3-right w3-theme" >Send</button>

      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>


</body>
</html>
