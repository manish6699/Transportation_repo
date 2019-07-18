<?php
$servername="localhost";
$username="root";
$password="manish6699";
$conn= mysqli_connect($servername,$username,$password,'easymove');

if(!$conn){
	die("connection failed:".mysqli_error());
}
/*echo "<h1>connected sucessfully</h1>";*/
if (isset($_POST['submit'])) {
	$branch=$_POST['branchname'];
	if ($_POST['branchname']=='customer') {
	$userid=$_POST['id'];
	$sql="DELETE FROM `customer` where `C_id`='$userid'";
	if(mysqli_query($conn,$sql)){
		echo "<h3>one entity sucessfully deleted</h3>";
	}

}

	elseif ($_POST['branchname']=='customer_belongings') {
	$userid=$_POST['id'];
	$sql="DELETE FROM `customer_belongings` where `C_id`='$userid'";
	if(mysqli_query($conn,$sql)){
		echo "<h3>one entity sucessfully deleted</h3>";
	}

}

	elseif ($_POST['branchname']=='move_details') {
	$userid=$_POST['id'];
	$sql="DELETE FROM `move_details` where `C_id`='$userid'";
	if(mysqli_query($conn,$sql)){
		echo "<h3>one entity sucessfully deleted</h3>";
	}

}

	elseif ($_POST['branchname']=='payment_details') {
	$userid=$_POST['id'];
	$sql="DELETE FROM `payment_details` where `C_id`='$userid'";
	if(mysqli_query($conn,$sql)){
		echo "<h3>one entity sucessfully deleted</h3>";
	}
}

	elseif ($_POST['branchname']=='transporter') {
	$userid=$_POST['id'];
	$sql="DELETE FROM `transporter` where `T_id`='$userid'";
	if(mysqli_query($conn,$sql)){
		echo "<h3>one entity sucessfully deleted</h3>";
	}
}

	elseif ($_POST['branchname']=='veh_info') {
	$userid=$_POST['id'];
	$sql="DELETE FROM `veh_info` where `T_id`='$userid'";
	if(mysqli_query($conn,$sql)){
		echo "<h3>one entity sucessfully deleted</h3>";
	}
}
else{
	echo "<h3>entity does not exists</h3>";
}

}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<style type="text/css">
body{
	text-transform: uppercase;
	margin: 0;
	padding: 0;
	background-color: #224c84;
	text-align: center;
	}


a{
	color: #fff;
	text-decoration: none;
}
	
a:hover{
	color: rgb(255,0,0);
}
</style>
<head>
	<title>delete page</title>
</head>
<body>
<div class="del">
<h1>Record Deletion page</h1>
<br>
<br>
<br>
<br>
<form action="delete.php" method="post">
<h3 style="margin-left: 35px;">select table:<select name="branchname">
	<option>customer</option>
	<option>customer_belongings</option>
	<option>move_details</option>
	<option>payment_details</option>
	<option>transporter</option>
	<option>veh_info</option>
</select></h3>
<br>
<br>
<br>
<h3>Enter id:<input type="number" placeholder="specific id" name="id"></h3>
<br>
<br>
<br>
<input type="submit" name="submit" value="DELETE">
</form>
<br><br><br>
<a href="easymove.php">Back to Home</a>
<br><br><br>
<a href="userprofile.php">view tables</a>
</div>
</body>
</html>