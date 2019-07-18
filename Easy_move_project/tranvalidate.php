<?php
session_start();
$servername="localhost";
$username="root";
$password="manish6699";
$conn= mysqli_connect($servername,$username,$password,'easymove');
/*
if(!$conn){
	die("connection failed:".mysqli_error());
}
echo "<h1>connected sucessfully</h1>";
*/
$tranname=$_SESSION['tranname'];
$password=$_SESSION['tranpassword'];
$tid=$_SESSION['t_id'];
$sql="SELECT `T_id` from `move_details` where `T_id`='$tid'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($query);
if(empty($row->T_id)){
	echo "<h1>no details found</h1>";
}
else{
	$tiid=$row->T_id;
if($tiid==$tid){

	header('location:tripdet.php');
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