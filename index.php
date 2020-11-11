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
  background-image: url("libb.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("lib1.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("lib4.jpg");
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
  color: #B9104D;

  padding: 35px;
  font-size: 35px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 25px "Lato", sans-serif;
  color: #B9104D;
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
</style>
<div class="head">
			<h1><span class="highlight">Book</span>Tique</h1>
		</div>
		<div class="topnav">
  <a class="active" href="index.php">Home</a>
  
  <a href="contactt.php">Contact Us</a>
  <a  href="login.php">Login</a>
  
</div>

</head>
<body>

	<div class="bgimg-1">
  <div class="caption">
  <span class="border"><strong>BOOKTIQUE</strong></span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;font-size: 20px">
  <h3 style="text-align:center;font-size: 25px,color: #B9104D">ABOUT US</h3>
  <p>BookTique is an online book borrowing system. It is specially designed for students from the engineering field.<br>You first have to create an account where you will be asked to enter all your details. Then you can login any time and view the books that are available at that time. <br> 
  The system is specialized for you and we show you the books pertaining to the branch and semester you are currently studying in.</p>
</div>

<div class="bgimg-2">
  <div class="caption">
  <span class="border" style="background-color:white;font-size:35px;color: #B9104D;font-size: 25px"><strong>WE OFFER</strong></span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;font-size: 20px">
  <p>BookTique is completely free of cost.We do not ask for any kind of money while borrowing or returning a book. You can borrow books which will be reflected in your account. And you will have to return it back within a period of 8 months, after the semester ends.<br>
  	We assure you about the quality of the books. at the same time expect you to return them in the same condition otherwise a fine will be levied.<br>
  So what are you waiting for!
Go and create an account right now!!</p>
  </div>
</div>

<div class="bgimg-3">
  
</div>


    <footer id="main-footer">
    <p>Copyright &copy; 2019 BookTique.com</p>
  </footer> </p>
  



	</body>
	</html>