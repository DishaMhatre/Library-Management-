<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	*{
		font-family: sans-serif;
	}

	.head h1{
		font-family: sans-serif;
		font-weight: bold;


	}
	.highlight{
		color:#C71585;
	}
	.head{
		background-color: #FFF0F5;
		padding: 20px;
		
	}

	.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #FFF0F5;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #C71585;
  color: white;
}




body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("c2.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("c1.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("c3.jpg");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: white;
}

.caption span.border {
  background-color: white;
  color: darkblue;

  padding: 35px;
  font-size: 35px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 25px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
  }
}
#main-footer{
  background: #333;
  color:#fff;
  text-align: center;
  padding:20px;
  
}
a{
  color:black;
}
a:hover{
  color:darkblue;
}
</style>
<div class="head">
			<h1><span class="highlight">Book</span>Tique</h1>
		</div>
		<div class="topnav">
  <a  href="index.php">Home</a>
  
  <a class="active" href="contactt.php">Contact Us</a>
  <a  href="login.php">Login</a>
  
</div>

</head>
<body>

	<div class="bgimg-1">
  <div class="caption">
  <span class="border"><strong>Get in Touch</strong></span>

<br><br><br>
  <span class="border" style="background-color:transparent;font-size:35px;color: white;font-size: 25px"><strong>Want to get in touch? We would love to hear from you. Here's how you can reach us..</strong></span>
  </div>
</div>
  


<div style="color: #777;background-color:white;text-align:center;padding:30px 60px;text-align: justify;font-size: 20px">
  <h3 style="text-align:center;color:darkblue;font-size:25px">ADDRESS:</h3>
  
  
    <p style="text-align:center">Vivekanand Education Society's Institute of Technology<br>
    Hashu Advani Memorial Complex, Collector's Colony,<br>
    Chembur, Mumbai, Maharashtra<br>
    400074</p>
</div>

<div class="bgimg-2">
  <div class="caption">
  <span class="border" style="background-color:white;font-size:35px;color: darkblue;font-size: 25px"><strong>Contact Us</strong></span>
  </div>
</div>

<div style="position:relative;">
  <div style="text-align:center;padding:30px 60px;text-align: justify;font-size: 20px">
  
    <p style="text-align: center">Phone: 987987987<br>

    Email: BookTiquebookswap@gmail.com</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
  <span class="border" style="background-color:white;font-size:35px;color: darkblue;font-size: 25px"><strong>Find Us</strong></span>
  </div>

  
</div>
<div style="position:relative;">
  <div style="text-align:center;padding:15px 30px;text-align: justify;font-size: 20px">
    <div style="text-align: center;">
    <h4 style="text-align: center;color:darkblue"> Here is our location on Google Maps:</h4>
    <a  href="https://goo.gl/maps/CPmX1Mxb7Biw7nQS8">Location</a>
  </div>
  </div>
</div>



    <footer id="main-footer">
    <p>Copyright &copy; 2019 BookTique.com</p>
  </footer> </p>
  



	</body>
	</html>