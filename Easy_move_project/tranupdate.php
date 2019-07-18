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
	<title>transporter updation</title>
</head>
<body>
<?php
   if(isset($_POST['upname']))
   {
   $tid=$_SESSION['tid'];
	$nname=$_POST['newname'];
	$naddress=$_POST['newaddress'];
	$nvehno=$_POST['newvehno'];
	$nvehtype=$_POST['newvehtype'];
	$nemail=$_POST['newemail'];
	$nphno=$_POST['newphno'];
	$nmovecount=$_POST['newcount'];
	if($nname){
		$sql="UPDATE `transporter` SET `T_name`='$nname' where `T_id`='$tid'";
		mysqli_query($conn,$sql);
	}
	if($naddress){
		$sql="UPDATE `transporter` set `T_address`='$naddress' where `T_id`='$tid'";
			mysqli_query($conn,$sql);
	}
	if($nvehno){
		$sql="UPDATE `transporter` set `T_vehno`='$nvehno' where `T_id`='$tid'";
			mysqli_query($conn,$sql);
	}
	if($nvehtype){
		$sql="UPDATE `transporter` set `T_vehtype`='$nvehtype' where `T_id`='$tid'";
			mysqli_query($conn,$sql);
	}	
	if($nemail){
		$sql="UPDATE `transporter` set `T_email`='$nemail' where `T_id`='$tid'";
			mysqli_query($conn,$sql);
	}
	if($nphno){
		$sql="UPDATE `transporter` set `T_phno`='$nphno' where `T_id`='$tid'";
			mysqli_query($conn,$sql);
	}
	if($nmovecount){
		$sql="UPDATE `transporter` set `move_count`='$nmovecount' where `T_id`='$tid'";
			mysqli_query($conn,$sql);
	}
	mysqli_close($conn);
	$_SESSION['tid']='';
	session_unset();
	session_destroy();
		header('location:userprofile.php');
}
?>
</body>
</html>