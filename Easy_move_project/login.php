<?php
session_start();
$_SESSION['username']='manish';
$_SESSION['adpassword']='manish6699';
if(isset($_POST['login']))
{
	if($_SESSION['username']==$_POST['name'] && $_SESSION['adpassword']==$_POST['pass'])
	{
		
		echo "welcome admin";
		header('location:easymove.php');
	}else{
		echo "name and password mismatch";
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
	<title>admin login</title>
</head>
<link rel="stylesheet" type="text/css" href="logstyle.css">
<body>
	<div class="loginbox">
	<img src="avatar.png" class="avatar">
	<div class="below">
	<h1>admin Login</h1>
	<form action="login.php" method="post">
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
