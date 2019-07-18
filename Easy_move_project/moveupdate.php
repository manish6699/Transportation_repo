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
	<title>move details updation</title>
</head>
<body>
<?php
   if(isset($_POST['upname']))
   {
   $cid=$_SESSION['cid'];
	$nname=$_POST['newname'];
	$nsaddress=$_POST['newsaddress'];
	$neaddress=$_POST['neweaddress'];
	$nphno=$_POST['newphno'];
	$nmoved=$_POST['newdate'];
	$nemail=$_POST['newemail'];
	$ndkm=$_POST['newdkm'];
	$ntid=$_POST['newtid'];
	if($nname){
		$sql="UPDATE `move_details` SET `C_name`='$nname' where `C_id`='$cid'";
		mysqli_query($conn,$sql);
	}
	if($naddress){
		$sql="UPDATE `move_details` set `Source_address`='$nsaddress' where `C_id`='$cid'";
			mysqli_query($conn,$sql);
	}
		if($naddress){
		$sql="UPDATE `move_details` set `Dest_address`='$neaddress' where `C_id`='$cid'";
			mysqli_query($conn,$sql);
	}
		if($nphno){
		$sql="UPDATE `move_details` set `C_phno`='$nphno' where `C_id`='$cid'";
			mysqli_query($conn,$sql);
	}
		if($nmoved){
		$sql="UPDATE `move_details` set `move_date`='$nmoved' where `C_id`='$cid'";
			mysqli_query($conn,$sql);
	}
		if($nemail){
		$sql="UPDATE `move_details` set `C_email`='$nemail' where `C_id`='$cid'";
			mysqli_query($conn,$sql);
	}
		if($ndkm){
		$sql="UPDATE `move_details` set `Dist_km`='$ndkm' where `C_id`='$cid'";
			mysqli_query($conn,$sql);
	}
		if($ntid){
		$sql="UPDATE `move_details` set `T_id`='$ntid' where `C_id`='$cid'";
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