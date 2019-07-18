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
<head>
	<title>customer belongings updation</title>
</head>
<body>
<?php
   if(isset($_POST['upname']))
   {
   $cid=$_SESSION['cid'];
	$ntid=$_POST['newtid'];
	$npayment=$_POST['newap'];
	if($ntid){
		$sql="UPDATE `payment_details` SET `T_id`='$ntid' where `C_id`='$cid'";
		mysqli_query($conn,$sql);
	}
	if($npayment){
		$sql="UPDATE `payment_details` set `payment`='$npayment' where `C_id`='$cid'";
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