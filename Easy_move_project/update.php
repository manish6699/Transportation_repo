
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

a{
	color: #fff;
	text-decoration: none;
}
	
a:hover{
	color: rgb(255,0,0);
}
</style>
<head>
	<title>update page</title>
</head>
<body>
<div class="sec">
<h1>updation page</h1>
<br>
<br>
<br>
<br>
<form action="cusupdate.php" method="post">
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
<input type="submit" name="submit" value="UPDATE">
</form>
<br><br><br>
<a href="easymove.php">Back to Home</a>
<br><br>
<a href="userprofile.php">view tables</a>
</div>
</body>
</html>