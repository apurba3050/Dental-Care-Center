<?php 

 	$host="localhost";
 	$user="root";
 	$pass="";
 	$db="dental";

 	$conn=mysql_connect($host,$user,$pass);
 	if (!$conn) {
 		die(mysql_error());
 	}
     mysql_select_db($db,$conn);

 	$msg="";


 	
 	if (isset($_POST['reg']))
 	 {
 		
 		$f_name=$_POST['f_name'];
 		$l_name=$_POST['l_name'];
 		$gender=$_POST['gender'];
 		$dob=$_POST['dob'];
 		$email=$_POST['email'];
 		$password=$_POST['password'];
 		$address=$_POST['address'];
 		$contact=$_POST['contact'];

 		$sql="INSERT INTO registrations(first_name,last_name,gender,date_of_birth,email,password,address,contact)
 		values ('$f_name','$l_name','$gender','$dob','$email','$password','$address','$contact')";
 		if (mysql_query($sql)>0) {
 			$msg="Registration Successfully Completed";
 		}else{
 			$msg="Error on Save Data";
 		}
 		
 		
 	}
 	$sql="SELECT * FROM registrations";
 	$r=mysql_query($sql);
 	mysql_close();
 	
  ?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="UTF-8">
 	<title>User Registration</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
				Dental Care Services/Registration  <br><br>
				<font size="5px"> Scroll down for Registration </font>
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

	<!-- Registration form division -->

 	<div class="reg-form">
 		<div class="reg-body">
 	      <form action="" method="post">
 		   <p><?php echo $msg; ?></p>
 		   First name <input type="text" name="f_name"><br>
		   Last name <input type="text" name="l_name"><br>
		   Date of Birth <input type="Date" name="dob"><br>
		   Gender <input type="radio" name="gender" value="Male">Male
		   	   <input type="radio" name="gender" value="Female">Female<br>
		   E-mail <input type="email" name="email"><br>
		   Password <input type="password" name="password"><br>
		   Address <input type="text" name="address"><br>
		   Contact no. <input type="text" name="contact"><br>
		    <input type="submit" name="reg" value="Save">
 	       </form> 
 	       <br>
          <a href="login.php">GO TO LOGIN PAGE.....</a>
        </div>
 	      <style>
 		   .reg-form {
 		   	border: 1px solid white ; 
 		   	border-collapse: collapse;
 		   	width: 300px;
			margin:3% auto;
			background-color: #0fdbc4;
			padding: 20px;
 		   }
 		   .reg-body{
 		   	margin: 0;
			padding-right: 3% auto;

 		   }

 	      </style> 	
 	</div>

 	<!-- Nav-down bar division -->
	<div class="nav_down">
		<div>
		 &copy; Apurba Dental Care, site designed & developed by Apurba Saha 
		</div>
	</div>

	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>