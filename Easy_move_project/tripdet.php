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
$tname=$_SESSION['tranname'];
$tid=$_SESSION['t_id'];
$sql="SELECT `T_id` from `move_details` where `T_id`='$tid'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($query);
$tid=$row->T_id;

$sqll="SELECT `C_id` from `move_details` where `T_id`='$tid'";
$queryy=mysqli_query($conn,$sqll);
$roww=mysqli_fetch_object($queryy);
$cid=$roww->C_id;

$sqlll="SELECT `C_name`,`C_phno` from `customer` where `C_id`='$cid'";
$queryyy=mysqli_query($conn,$sqlll);
$rowww=mysqli_fetch_object($queryyy);
$cname=$rowww->C_name;
$cphno=$rowww->C_phno;
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
	<title>trip detail page</title>
</head>
<body>
	<h2><a href="easymove.php">back</a></h2>
<br>
<h1 style="text-align: center;">trip details</h1>
<br>
<br>
<table  cellpading="5" cellspacing="0" border="1"  align="center">
    <tr>
    	 <th>transporter name</th>
        <th>Customer name</th>
        <th>customer phno.</th>
    </tr>
   
    <tr>
        <td><?php echo $_SESSION['tranname']; ?></td>
        <td><?php echo $cname; ?></td>
        <td><?php echo $cphno; ?></td>
     
       </tr>
       <?php
mysqli_close($conn);
?>       
</table>
</body>
</html>