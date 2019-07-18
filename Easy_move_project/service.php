
<?php
session_start();
$servername="localhost";
$username="root";
$password="manish6699";
$conn= mysqli_connect($servername,$username,$password,'easymove');

if(!$conn){
	die("connection failed:".mysqli_error());
}
/*echo "<h1>connected sucessfully</h1>";*/
$cunam=$_SESSION['cusname'];
$cid=$_SESSION['c_id'];
if(!empty($cunam) && !empty($cid))
{
if(isset($_POST['move_book']))
{
$cusname=$_POST['c_cus_name'];
$sourceadd=$_POST['s_address'];
$d_address=$_POST['d_address'];
$phno=$_POST['c_ph_no'];
$curdate=$_POST['date'];
$vehty=$_POST['veh_type'];
$email=$_POST['email'];
$diskm=$_POST['dkm'];
$i_count=$_POST['itemcount'];
$listofi=$_POST['loi'];
/*
$cid="SELECT `C_id` FROM `customer` WHERE `C_name`='$cusname' and `C_email`='$email'";


    $query=mysqli_query($conn,$cid);
	$row=mysqli_fetch_object($query);
	if($row){

	}
	else{
		echo "register first";
		header('location:signupcus.php');
	}

    	$result=$row->C_id;*/
  //finding matching t_id   
    $tid="SELECT `T_id` FROM `transporter` WHERE `vehtype`='$vehty' and `T_address`='$sourceadd' and `move_count` in (SELECT min(move_count) FROM `transporter`)"; 
    $query2=mysqli_query($conn,$tid);
    $row2=mysqli_fetch_object($query2);
    if(empty($row2))
    {
    	header('location:sorry.php');
    }
    $tid2=$row2->T_id;
    
    //inserting move details
	$sql="INSERT INTO `move_details`(`C_id`,`C_name`, `Source_address`, `dest_address`, `C_phno`, `move_date`, `C_email`, `dist_km`,`T_id`) VALUES ('$cid','$cusname','$sourceadd','$d_address','$phno','$curdate','$email','$diskm','$tid2')";
//customer belongings
 //updating move_count
    $sql3="UPDATE `transporter` SET `move_count`=move_count+1 WHERE `T_id`='$tid2'";
     
	echo "<br>";
	if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql3)){
	$sql2="INSERT INTO `customer_belongings`(`C_id`, `No_of_items`, `List_of_items`) VALUES ('$cid','$i_count','$listofi')";
	  mysqli_query($conn,$sql2);
		echo "sucessfull submission";
	} 
	else{
	echo "error".$sql."<br>".mysqli_error($conn);
	}

  
   $cpkm="SELECT `CPKM` FROM `veh_info` WHERE `T_id`='$tid2'";
    $quer=mysqli_query($conn,$cpkm);
   $rw=mysqli_fetch_object($quer);
   $temp=$rw->CPKM; 
  $payment=$diskm*$temp;
  
  $sql4="INSERT INTO `payment_details`(`C_id`, `T_id`, `payment`) VALUES ('$cid','$tid2','$payment')";

  mysqli_query($conn,$sql4);
}
}
else
{
	header('location:cuslogin.php');
}
mysqli_close($conn)
?>

<!DOCTYPE html>
<html>
<style type="text/css">
	body{
		background-image: url('image.jpg');
		background-size: cover;
		text-transform: uppercase; 
	}


.service{
	margin-bottom: 40px;
	width: 320px;
	height: 800px;
	background: #000;
	color: #fff;
	top: 50%;
	left: 60%;
	position: absolute;
	transform: translate(-50%,-37%);
	box-sizing: border-box;
	opacity: 0.7;
	text-align: center;
}
h1{
	font-family: sans-serif;
	font-size: 40px;
	color: #000;

}
h3{
	font-family: sans-serif;
	font-size: 30px;
	color: #000;
}
a{
	font-size: 35px;
	text-decoration: none;
	color: #fff;
	
}
a:hover{
	color: rgb(255,0,0);
}
</style>
<head>
	<title>service page</title>
</head>
<body>
<h1>Thanks for choosing <br>easymove.</h1>
<h3>note:<blink>If you have not Sign Up,<br> please Sign Up First.</blink></h3>
<br>
<a href="signupcus.php" style="margin-left: 12%">Register</a><br><br>
<a href="easymove.php" style="margin-left: 7%">Back to Home</a>
	<div class="service">
		<h2>enter move details</h2>
<form action="service.php" method="post">
		<p>user name:</p>
		 <input type="text" placeholder="username" name="c_cus_name" required="">
		 <p>source address:</p>
		 <input type="text" placeholder="start address" name="s_address" required="">
		 <p>destination address:</p>
		 <input type="text" placeholder="end address" name="d_address" required="">
		 <p>date of move:</p>
		 <input type="date" placeholder="date of move" name="date" required="">
		 <p>ph no.:</p>
		 <input type="tel" placeholder="phone no." minlength="10" maxlength="10" name="c_ph_no" required="">
		  <p>vehicle type needed:</p>
		 <input type="text" placeholder="A-heavy:B-medium:C-light" name="veh_type" required="">
		 <p>email:</p>
		 <input type="email" placeholder="demo@123gmail.com" name="email" required="">
		 <p>dis. from source to dest.:</p>
		 <input type="number" placeholder="distance in km" name="dkm" required="">
		 <p>items count:</p>
		 <input type="number" placeholder="no. of your items" name="itemcount" required="">
		 <p>list of items:</p>
		 <input type="text" placeholder="list of items" name="loi" required="">
		 <br>
		 <br>
		<input type="submit" name="move_book" value="book a move">
	</form>
</div>
</body>
</html>