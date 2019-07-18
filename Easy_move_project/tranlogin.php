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
$tranname=$_POST['name'];
$password=$_POST['pass'];
$_SESSION['tranname']=$tranname;
$_SESSION['tranpassword']=$password;
$sq="SELECT `T_id` from `transporter` where `T_name`='$tranname' and `tpassword`='$password'";
$quer=mysqli_query($conn,$sq);
$ro=mysqli_fetch_object($quer);
$_SESSION['t_id']=$ro->T_id;
$sql="SELECT `T_name`, `tpassword` from `transporter` where `T_name`='$tranname' and `tpassword`='$password'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($query);
if(!$row)
{
	header('location:signuptran.php');
}
$trannam=$row->T_name;
$tpass=$row->tpassword;
if ($trannam && $tpass) {
		header('location:easymove.php');
}
}
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
	<title>transporter login</title>
</head>
<link rel="stylesheet" type="text/css" href="logstyle.css">
<body>
	<div class="loginbox">
	<img src="avatar.png" class="avatar">
	<div class="below">
	<h1>Transporter Login</h1>
	<form action="tranlogin.php" method="post">
		<p>user name:</p>
		 <input type="text" placeholder="username" name="name" required="">
		 <p>password:</p>
		 <input type="password" placeholder="password" minlength="8" name="pass" required="">
         <br>
         <br>
		 <input type="submit"  name="login" value="login">
	</form>		
	
	</div>	
	</div>

</body>
</html>
