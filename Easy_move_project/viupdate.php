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
	<title>vehicle info. updation</title>
</head>
<body>
<?php
   if(isset($_POST['upname']))
   {
   $tid=$_SESSION['tid'];
	$nvehtype=$_POST['newvehtype'];
	$ncpkm=$_POST['newcpkm'];
	$nvehno=$_POST['newvehno'];

	if($nvehtype){
		$sql="UPDATE `veh_info` set `Veh_type`='$nvehtype' where `T_id`='$tid'";
			mysqli_query($conn,$sql);
	}	
	if($ncpkm){
		$sql="UPDATE `veh_info` set `CPKM`='$ncpkm' where `T_id`='$tid'";
			mysqli_query($conn,$sql);
	}
	if($nvehno){
		$sql="UPDATE `veh_info` set `Veh_no`='$nvehno' where `T_id`='$tid'";
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