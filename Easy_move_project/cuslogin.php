<?php
session_start();
$servername="localhost";
$username="root";
$password="manish6699";
$conn= mysqli_connect($servername,$username,$password,'easymove');

if(!$conn){
	die("connection failed:".mysqli_error());
}
echo "<h1>connected sucessfully</h1>";

if(isset($_POST['login']))
{
$cusname=$_POST['name'];
$password=$_POST['pass'];
$_SESSION['cusname']=$cusname;
$_SESSION['cuspassword']=$password;
$sq="SELECT `C_id` from `customer` where `C_name`='$cusname' and `cpassword`='$password'";
$quer=mysqli_query($conn,$sq);
$ro=mysqli_fetch_object($quer);
$_SESSION['c_id']=$ro->C_id;
$sql="SELECT `C_name`, `cpassword` from `customer` where `C_name`='$cusname' and `cpassword`='$password'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($query);
if(!$row)
{
	header('location:signupcus.php');
}
$cusnam=$row->C_name;
$cpass=$row->cpassword;
if ($cusnam && $cpass) {
		header('location:easymove.php');
}
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<style type="text/css">
	body{
	margin: 0;
	padding: 0;
	background-image: url(login.jpg);
	background-size: 100%;
text-transform: uppercase;
}

.loginbox{
	width: 320px;
	height: 420px;
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

.below{
	margin-top: 50px;
}

.avatar{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}
</style>

<head>
	<title>customer login</title>
</head>
<link rel="stylesheet" type="text/css" href="logstyle.css">
<body>
	<div class="loginbox">
	<img src="avatar.png" class="avatar">
	<div class="below">
	<h1>Customer Login</h1>
	<form action="cuslogin.php" method="post">
		<p>user name:</p>
		 <input type="text" placeholder="username" name="name" required="">
		 <p>password:</p>
		 <input type="password" placeholder="password" minlength="5" name="pass" required="">
         <br>
         <br>
		 <input type="submit"  name="login" value="login">
	</form>		
	
	</div>	
	</div>

</body>
</html>
