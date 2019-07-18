<?php
session_start();
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
	text-align: center;
	}
</style>

<head>
	<title>updation page</title>
</head>
<body>

<h1>customer updation page</h1>
<?php
if (isset($_POST['submit'])) {
	$branch=$_POST['branchname'];

	if ($_POST['branchname']=='customer') {
			   $_SESSION['cid']=$_POST['id'];
	?>
	<br>
	<br>
<form action="cusupdate2.php" method="post">
	new customer name:<input type="text" name="newname">
	<br>
	<br>
	<br>
	new customer address:<input type="text" name="newaddress">
	<br>
	<br>
	<br>
	new customer phno:<input type="number" minlength="10" maxlength="10" name="newphno">
	<br>
	<br>
	<br>
	new customer email:<input type="email" name="newemail">
	<br>
	<br>
	<br>
    <input type="submit" name="upname" value="UPDATE">
</form>
<?php
}


if ($_POST['branchname']=='transporter') {
			   $_SESSION['tid']=$_POST['id'];
	?>
<form action="tranupdate.php" method="post">
	new transporter name:<input type="text" name="newname">
	<br>
	<br>
	<br>
	new transporter address:<input type="text" name="newaddress">
	<br>
	<br>
	<br>
	new  vehicle no.:<input type="number" name="newvehno">
	<br>
	<br>
	<br>
	new vehicle type:<input type="text" maxlength="1" name="newvehtype">
	<br>
	<br>
	<br>
	new email:<input type="email" name="newemail">
	<br>
	<br>
	<br>
    new phno:<input type="number" minlength="10" maxlength="10" name="newphno">
	<br>
	<br>
	<br>
    new count value:<input type="number" name="newcount">
	<br>
	<br>
	<br>
    <input type="submit" name="upname" value="UPDATE">
</form>
<?php
}


	if ($_POST['branchname']=='customer_belongings') {
			   $_SESSION['cid']=$_POST['id'];
	?>
<form action="cusbelupdate.php" method="post">

	new number of items:<input type="number" name="newitemno">
	<br>
	<br>
	<br>
	new list of items:<input type="text" name="newloi">
	<br>
	<br>
	<br>
    <input type="submit" name="upname" value="UPDATE">
</form>
<?php
}

if ($_POST['branchname']=='move_details') {
			   $_SESSION['cid']=$_POST['id'];
	?>
<form action="moveupdate.php" method="post">
	new customer name:<input type="text" name="newname">
	<br>
	<br>
	<br>
	new start address:<input type="text" name="newsaddress">
	<br>
	<br>
	<br>
	new end address:<input type="text" name="neweaddress">
	<br>
	<br>
	<br>
	new customer phno.:<input type="number" minlength="10" maxlength="10" name="newphno">
	<br>
	<br>
	<br>
	new move date:<input type="date" name="newdate">
	<br>
	<br>
	<br>
	new customer email:<input type="email" name="newemail">
	<br>
	<br>
	<br>
	new distance in km:<input type="number" name="newdkm">
	<br>
	<br>
	<br>
	new transporter id:<input type="number" name="newtid">
	<br>
	<br>
	<br>
    <input type="submit" name="upname" value="UPDATE">
</form>
<?php
}

if ($_POST['branchname']=='payment_details') {
			   $_SESSION['cid']=$_POST['id'];
	?>
<form action="paymentupdate.php" method="post">

	new transporter id:<input type="number" name="newtid">
	<br>
	<br>
	<br>
	new amount paid:<input type="text" name="newap">
	<br>
	<br>
	<br>
    <input type="submit" name="upname" value="UPDATE">
</form>
<?php
}


if ($_POST['branchname']=='veh_info') {
			   $_SESSION['tid']=$_POST['id'];
	?>
<form action="viupdate.php" method="post">

	new vehicle type:<input type="text" maxlength="1" name="newvehtype">
	<br>
	<br>
	<br>
	new cost per km:<input type="number" name="newcpkm">
	<br>
	<br>
	<br>
	new  vehicle no.:<input type="number" name="newvehno">
	<br>
	<br>
	<br>

    <input type="submit" name="upname" value="UPDATE">
</form>
<?php
}

}
?>

</body>
</html>