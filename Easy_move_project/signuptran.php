<!DOCTYPE html>
<html>
<style type="text/css">
body{
	margin: 0;
	padding: 0;
	background-image: url("login2.jpg");
	background-size: 100%;
	/*background-image: url(pic3.jpg);
	background-position: center;
   */
text-transform: uppercase;
}

.signupbox{
	width: 320px;
	height: 700px;
	background: #000;
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	opacity: 0.7;
	text-align: center;
}

a{
	color: #fff;
}
	
a:hover{
	color: rgb(255,0,0);
}
</style>


<head>
	<title>signup</title>
</head>
<body>
<div class="signupbox">	
<h1>Transporter Registration</h1>
	<form action="signuptran.php" method="post">
		<p>user name:</p>
		 <input type="text" placeholder="username" name="t_name" required="">
		  	<p>password:</p>
		 <input type="password" placeholder="password" name="t_pas" required="">
		 <p>address:</p>
		 <input type="text" placeholder="permanent address" name="t_address" required="">
		  <p>ph no.:</p>
		 <input type="tel" placeholder="phone no." maxlength="10" maxlength="10" name="t_ph_no" required=""> 
		 <p>vehicle no.:</p>
		 <input type="text" max="6" placeholder="veh_no" name="veh_no" required="">
		 <p>vehicle type:</p>
		 <input type="text" placeholder="A-heavy:B-medium:C-light" name="vetype" required="">
		 <p>email id:</p>
		 <input type="email" placeholder="demo123@gmail.com" name="t_email" required="">
		 <p>cost per km:</p>
		 <input type="number" placeholder="enter cost per km charge" name="costkpm" required="">
		 <br>
		 <br>
		<div class="button"><input type="submit" name="Signup" value="Signup"></div>
	</form>
	<br>
	<a href="easymove.php">Back</a>
	</div>	

<?php
$servername="localhost";
$username="root";
$password="manish6699";
$conn= mysqli_connect($servername,$username,$password,'easymove');

if(!$conn){
	die("connection failed:".mysqli_error());
}
echo "<h1>connected sucessfully</h1>";
if(isset($_POST['Signup']))
{
$tname=$_POST['t_name'];
$taddress=$_POST['t_address'];
$vehno=$_POST['veh_no'];
$vehtype=$_POST['vetype'];
$email=$_POST['t_email'];
$phno=$_POST['t_ph_no'];
$cpkm=$_POST['costkpm'];
$pas=$_POST['t_pas'];
	$sql="insert into `transporter`(`T_name`, `T_address`, `T_email`, `T_phno`,`move_count`,`tpassword`) VALUES ('$tname','$taddress','$email','$phno',0,'$pas')";
	$Tid="SELECT `T_id` FROM `transporter` WHERE `T_name`='$tname' and `T_email`='$email'";
    
	echo "<br>";
	if(mysqli_query($conn,$sql)){
		echo "sucessfull submission";
	} else{
	echo "error".$sql."<br>".mysqli_error($conn);
	}

	$query=mysqli_query($conn,$Tid);
	$row=mysqli_fetch_object($query);
	$tid=$row->T_id;
	$vehinfo="INSERT INTO `veh_info`(`T_id`, `Veh_type`, `CPKM`, `Veh_no`) VALUES ('$tid','$vehtype','$cpkm','$vehno')";
	if(mysqli_query($conn,$vehinfo))
	header('location:easymove.php');
	}


mysqli_close($conn);
?>	
</body>
</html>