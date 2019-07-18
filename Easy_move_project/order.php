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
echo "<h1>connected sucessfully</h1>"; */
$cname=$_SESSION['cusname'];
$cid=$_SESSION['c_id'];
$sql="SELECT `T_id` from `move_details` where `C_name`='$cname' and `C_id`='$cid'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($query);
$tid=$row->T_id;

$sqll="SELECT `T_name`,`T_phno` from `transporter` where `T_id`='$tid'";
$queryy=mysqli_query($conn,$sqll);
$roww=mysqli_fetch_object($queryy);
$tname=$roww->T_name;
$tphno=$roww->T_phno;

$sqlll="SELECT `Veh_no` from `veh_info` where `T_id`='$tid'";
$queryyy=mysqli_query($conn,$sqlll);
$rowww=mysqli_fetch_object($queryyy);
$vehno=$rowww->Veh_no;
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<style type="text/css">
	body{
	margin: 0;
	padding: 0;
	background-color:#224c84;
	background-size: 100%;
	text-transform: uppercase;
	}
	a{
		color: #000;
		text-decoration: none;
	}
	a:hover{
		color: #fff;
	}
</style>
<head>
	<title>order page</title>
</head>
<body>
	<h2><a href="easymove.php">back</a></h2>
<br>
<h1 style="text-align: center;">Booking details</h1>
<br>
<br>
<table  cellpading="5" cellspacing="0" border="1"  align="center">
    <tr>
        <th>Customer name</th>
        <th>transporter name</th>
        <th>transporter phno.</th>
        <th>vehicle number</th>
    </tr>
   
    <tr>
        <td><?php echo $_SESSION['cusname']; ?></td>
        <td><?php echo $tname; ?></td>
        <td><?php echo $tphno; ?></td>
        <td><?php echo $vehno; ?></td>
       </tr>
        
</table>
</body>
</html>