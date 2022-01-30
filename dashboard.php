<?php

	session_start();
	if(!isset($_SESSION['email'])){
		header("location:login.php");
	}

	$sql="SELECT * FROM registrations";
 	$r=mysql_query($sql);
 	mysql_close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
	<!-- Contact/top bar div -->

	<div class="top">
		<div>
		 Contact Us +880 1711 200000 / 01 | adc@hospital.com 
		</div>
	</div>
	
	
	<!--  logo and menu bar div -->

	<div class="logo">

		<div>
			<table>
				<tr>
					<td width="600px" style="font-size:50px;font-family:forte;"> <font color="#428bca"> APURBA </font><font color="#000"> Dental Care</font> </td>
					<td> <br> <br>
						<font size="4px"> 
							<a href="index.php">HOME</a> 
							<a href="about.php">ABOUT US</a>  
							<a href="service.php">SERVICE</a>
							<a href="doctor.php">DOCTORS</a>
							<a href="login.php">LOGIN</a> 
							<a href="contact.php">CONTACT US</a>
						</font>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
	<!--  Middle division big image -->

	<div class="middle">
		<div style="background-image:url('img/a1.jpg');">
			<p>
				Dental Care Services/Login Successful  <br><br>
				<font size="5px"> Scroll down for more </font>
			</p> 
		</div>
	</div>
	
	<!-- Slider division -->

	<div id="slider"  data-ride="carousel">
		<div>
			<img src="img/slide11.jpg" alt="">
		</div>
		<div>
			<img src="img/slide22.jpg" alt="">
		</div>
		<div>
			<img src="img/slide33.jpg" alt="">
		</div>
		<div>
			<img src="img/slide44.jpg" alt="">
		</div>
	</div>
	

	<div class="show-name">	
	   <div>
		   <h2>Login Successful</h2>
       </div><br>
	   		    
	    <h2><div>Name:
		   <?php echo $_SESSION['f_name']." ".$_SESSION['l_name']; ?>
	    </div></h2>

	    <h2><div>Contact no:
		   <?php echo $_SESSION['contact']; ?>
	    </div></h2><br>	 

	    <div class="log-out">
		   <a href="logout.php"><h1>Logout</h1></a>
       </div>  
	</div>
	<style>
		.show-name{
			width: 400px;
			margin:3% auto;
			background-color: #0fdbc4;
			padding: 20px;

		}
	</style>

	<div class="nav_down">
		<div>
		 &copy; Apurba Dental Care, site designed & developed by Apurba Saha
		</div>
	</div>

</body>
</html>