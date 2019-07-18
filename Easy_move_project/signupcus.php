<!DOCTYPE html>
<html>
<style type="text/css">
body{
	margin: 0;
	padding: 0;
	background-image: url("login2.jpg");
	background-size: 100%;
	text-transform: uppercase;
	/*background-image: url(pic3.jpg);
	background-position: center;
   */

}

.signupbox{
	width: 320px;
	height: 500px;
	background: #000;
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	opacity: 0.7;
	text-align: center;
}

a{
	color: #fff;
}
	
a:hover{
	color: rgb(255,0,0);
}
</style>
<head>
	<title>signup</title>
</head>
<body>
<div class="signupbox">	
<h1>Customer Registration</h1>
	<form action="signupcus.php" method="post">
		<p>user name:</p>
		 <input type="text" placeholder="username" name="c_cus_name" required="">
		 	<p>password:</p>
		 <input type="password" placeholder="password" name="c_pas" required="">
		 <p>address:</p>
		 <input type="text" placeholder="address" name="c_address" required="">
		  <p>ph no.:</p>
		 <input type="tel" placeholder="phone no." minlength="10" maxlength="10" name="c_ph_no" required="">
		 <p>email:</p>
		 <input type="email" placeholder="demo@123gmail.com" name="c_email" required="">
		 <br>
		 <br>
		<input type="submit" name="Signup" value="Signup">
	</form><br>
	<a href="easymove.php">Back</a>
	</div>		
	<?php
$servername="localhost";
$username="root";
$password="manish6699";
$dbname="easymove";
$conn= mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("connection failed:".mysql_error());
}
echo "<h1>connected sucessfully</h1><br>";
if(isset($_POST['Signup']))
{
$cus_name=$_POST["c_cus_name"];
$c_address=$_POST["c_address"];
$phno=$_POST["c_ph_no"];
$email=$_POST["c_email"];
$pas=$_POST['c_pas'];
$sql="insert into `customer`(`C_name`,`c_address`,`C_phno`,`C_email`,`cpassword`) VALUES ('$cus_name','$c_address',$phno,'$email','$pas')";
if(mysqli_query($conn,$sql)){
	echo "sucessfull submission";
	header('location:easymove.php');
} else{
echo "error".$sql."<br>".mysqli_error($conn);
}
}

mysqli_close($conn);
?>
</body>
</html>

