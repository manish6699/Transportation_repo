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
?>
<!DOCTYPE html>
<html>
<!--
<style type="text/css">
	body{
	margin: 0;
	padding: 0;
	background-color:#224c84;
	background-size: 100%;
	text-transform: uppercase;
	text-align: center;
	}
</style>-->
<head>
	<title>customer updation</title>
</head>
<body>
<?php
   if(isset($_POST['upname']))
   {
   $cid=$_SESSION['cid'];
	$nname=$_POST['newname'];
	$naddress=$_POST['newaddress'];
	$nphno=$_POST['newphno'];
	$nemail=$_POST['newemail'];
	if($nname){
		$sql="UPDATE `customer` SET `C_name`='$nname' where `C_id`='$cid'";
		mysqli_query($conn,$sql);
	}
	if($naddress){
		$sql="UPDATE `customer` set `C_address`='$naddress' where `C_id`='$cid'";
			mysqli_query($conn,$sql);
	}
		if($nphno){
		$sql="UPDATE `customer` set `C_phno`='$nphno' where `C_id`='$cid'";
			mysqli_query($conn,$sql);
	}
		if($nemail){
		$sql="UPDATE `customer` set `C_email`='$nemail' where `C_id`='$cid'";
			mysqli_query($conn,$sql);
	}
	mysqli_close($conn);
	$_SESSION['cid']='';
	session_unset();
	session_destroy();
		header('location:userprofile.php');
}
?>
</body>
</html>