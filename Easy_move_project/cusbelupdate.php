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
	<title>customer belongings updation</title>
</head>
<body>
<?php
   if(isset($_POST['upname']))
   {
   $cid=$_SESSION['cid'];
	$nnoi=$_POST['newitemno'];
	$nloi=$_POST['newloi'];
	if($nnoi){
		$sql="UPDATE `customer_belongings` SET `No_of_items`='$nnoi' where `C_id`='$cid'";
		mysqli_query($conn,$sql);
	}
	if($nloi){
		$sql="UPDATE `customer_belongings` set `List_of_items`='$nloi' where `C_id`='$cid'";
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