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

$cusname=$_SESSION['cusname'];
$password=$_SESSION['cuspassword'];
$cid=$_SESSION['c_id'];
$sql="SELECT `C_id`,`C_name` from `move_details` where `C_name`='$cusname' and `C_id`='$cid'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($query);
if(empty($row->C_id)){
	echo "<h1>no details found</h1>";
}
else{
	$ciid=$row->C_id;
if($ciid==$cid){

	header('location:order.php');
}
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<style type="text/css">
		body{
	margin: 0;
	padding: 0;
	background-color:#224c84;
	background-size: 100%;
	text-transform: uppercase;
	text-align: center;
	}
</style>
<html>
<head>
	<title>validate page</title>
</head>
<body>

</body>
</html>