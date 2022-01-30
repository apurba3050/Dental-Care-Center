<?php

	session_start();
	include('db_connect.php');
	$msg="";
	if(isset($_POST['login']))
	{
		if($_POST['email']==""){
			$msg="Email Required.";
		}elseif($_POST['password']==""){
			$msg="Password Required.";
		}else{
			$e=$_POST['email'];
			$p=$_POST['password'];
			$q="SELECT * FROM registrations WHERE email='$e' AND password='$p'";
			$r=mysqli_query($con,$q);
			if(mysqli_num_rows($r)>0)
			{
				$row=mysqli_fetch_assoc($r);
				$_SESSION['id']=$row['id'];
				$_SESSION['email']=$row['email'];
				$_SESSION['f_name']=$row['first_name'];
				$_SESSION['l_name']=$row['last_name'];
				$_SESSION['contact']=$row['contact'];
				header("location:dashboard.php");
			}else{
				$msg="User or password error. Please try again later...";
			}
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<html>
<head>

	<title> Apurba Dental Care </title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
		body{
			background-color: ;
			margin: 0;
			padding: 0;
		}
		.login-form{
			width: 400px;
			margin:3% auto;
			background-color: #0fdbc4;
			padding: 20px;
		}
		.controls label,
		.controls input{
			width: 100%;
		}
		.btn input{
			width: 100px;
			height: 30px;
			background-color: green;
			color: #fff;
			margin-top: 10px;
		}
	</style>
	
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
				Dental Care Services/Login  <br><br>
				<font size="5px"> Scroll down for Login </font>
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
	
	<!-- Login division -->

	<div class="login-form">
		<p><?php echo $msg; ?></p>
		<form action="" method="post">
			<div class="controls">
				<label for="email">Email</label>
				<input type="email" name="email" required>
			</div>
			<div class="controls">
				<label for="password">Password</label>
				<input type="password" name="password" required>
			</div>
			<div class="btn">
				<input type="submit" name="login" value="Login">
			</div>
			<div><br>
				<a href="reg.php">New users? Please register with us..</a>
			</div>
		</form>
	</div>

	<div class="nav_down">
		<div>
		 &copy; Apurba Dental Care, site designed & developed by Apurba Saha
		</div>
	</div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>