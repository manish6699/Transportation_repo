<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<style type="text/css">
body{
	background-image: url("login2.jpg");
	background-size: 100%;
}
.texbox{
	text-align: center;
	font-family: sans-serif;
	text-transform: uppercase;
}
a{
	position: absolute;
	/*top: 50%;
	transform: translate(-50%,-50%);*/
	width: 200px;
	left: 42.5%;
	height: 60px;
	text-align: center;
	/*line-height: 60px;*/
	color:#fff;
	font-size: 24px;
	text-transform: uppercase;
	text-decoration: none;
	font-family: sans-serif;
	box-sizing: border-box;
	background:linear-gradient(90deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4);
	background-size: 400%;
	border-radius: 30px;
}
</style>
<head>
	<title>customer account page</title>
</head>
<body>
<div class="cont">
	<div class="texbox">
	<h1><strong>welcome <?php echo $_SESSION['cusname']; ?></strong></h1>
		<br>
		<br>
		<br>
		<br>
        <br>
		<br>
		<a href="validate.php">booking details</a>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
        <br>
		<br>
		<a href="logout.php">logout</a>

	</div>

</div>

</body>
</html>