<?php
$servername="localhost";
$username="root";
$password="manish6699";
$conn= mysqli_connect($servername,$username,$password,'easymove');

if(!$conn){
	die("connection failed:".mysqli_error());
}
/*echo "<h1>connected sucessfully</h1>";*/
?>
<!DOCTYPE html>
<html>
<style type="text/css">
body{
	margin: 0;
	padding: 0;
	background-color: #224c84;
	text-transform: uppercase;
}
input{
	margin-left: 540px;
    width: 300px;
    height: 40px;
	}
.cent{
	text-align: center;
}
a{
	text-decoration: none;
	text-align: center;
	font-size: 30px;
	margin-left: 540px;
	color: #000;
}
a:hover{
	color: #fff;
}
</style>
<head>
	<title>tables</title>
</head>
<body>
<!--<form action="userprofile.php" method="post">
	<input type="submit" name="submit" value="click me to see tables">
</form>-->
<div class="cent">
<h1>customer table</h1>
 <?php
    /*if(isset($_POST['submit']))
    {*/
    	?>
<table  cellpading="5" cellspacing="0" border="1"  align="center">
    <tr>
        <th>C_id</th>
        <th>C_name</th>
        <th>C_address</th>
        <th>C_phno</th>
        <th>C_email</th>
        <th>Cpassword</th>
    </tr>
   <?php
    $sql="select * from customer";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0)
    {
        while($row=mysqli_fetch_object($query))
        {
        
    ?>
    <tr>
        <td><?php echo $row->C_id; ?></td>
        <td><?php echo $row->C_name; ?></td>
        <td><?php echo $row->C_address; ?></td>
        <td><?php echo $row->C_phno; ?></td>
        <td><?php echo $row->C_email; ?></td>
        <td><?php echo $row->cpassword; ?></td>
    </tr>
        <?php
        }
    }

    ?>
</table>
</div>
<br>
<br>
<br>
<div class="cent">
<h1>Transporter table</h1>
 <?php
    /*if(isset($_POST['submit']))
    {*/
    	?>
<table  cellpading="5" cellspacing="0" border="1"  align="center">
    <tr>
        <th>T_id</th>
        <th>T_name</th>
        <th>T_address</th>
        <th>T_email</th>
        <th>T_phno</th>
        <th>move_count</th>
          <th>tpassword</th>
    </tr>
   <?php
    $sql="select * from transporter";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0)
    {
        while($row=mysqli_fetch_object($query))
        {
        
    ?>
    <tr>
        <td><?php echo $row->T_id; ?></td>
        <td><?php echo $row->T_name; ?></td>
        <td><?php echo $row->T_address; ?></td>
           <td><?php echo $row->T_email; ?></td>
        <td><?php echo $row->T_phno; ?></td>
          <td><?php echo $row->move_count; ?></td>
            <td><?php echo $row->tpassword; ?></td>
    </tr>
        <?php
        }
    }
    
        ?>
</table>
</div>
<br>
<br>
<br>
<div class="cent">
<h1>customer belongings table</h1>
 <?php
    /*if(isset($_POST['submit']))
    {*/
    	?>
<table  cellpading="5" cellspacing="0" border="1"  align="center">
    <tr>
        <th>C_id</th>
        <th>No_of_items</th>
        <th>List_of_items</th>
    </tr>
   <?php
    $sql="select * from customer_belongings";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0)
    {
        while($row=mysqli_fetch_object($query))
        {
        
    ?>
    <tr>
        <td><?php echo $row->C_id; ?></td>
        <td><?php echo $row->No_of_items; ?></td>
        <td><?php echo $row->List_of_items; ?></td>
    </tr>
        <?php
        }
    }
    
        ?>
</table>
</div>
<br>
<br>
<br>
<div class="cent">
<h1>payment table</h1>
 <?php
    /*if(isset($_POST['submit']))
    {*/
    	?>
<table  cellpading="5" cellspacing="0" border="1"  align="center">
    <tr>
        <th>C_id</th>
        <th>T_id</th>
        <th>payment or amount paid</th>
    </tr>
   <?php
    $sql="select * from payment_details";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0)
    {
        while($row=mysqli_fetch_object($query))
        {
        
    ?>
    <tr>
        <td><?php echo $row->C_id; ?></td>
        <td><?php echo $row->T_id; ?></td>
        <td><?php echo $row->payment; ?></td>
    </tr>
        <?php
        }
    }
    
        ?>
</table>
</div>
<br>
<br>
<br>
<div class="cent">
<h1>move details table</h1>
 <?php
    /*if(isset($_POST['submit']))
    {*/
    	?>
<table  cellpading="5" cellspacing="0" border="1"  align="center">
    <tr>
        <th>C_id</th>
        <th>C_name</th>
        <th>source_address</th>
        <th>dest_address</th>
        <th>C_phno</th>
        <th>move date</th>
        <th>C_email</th>
        <th>dist_km</th>
        <th>T_id</th>

    </tr>
   <?php
    $sql="select * from move_details";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0)
    {
        while($row=mysqli_fetch_object($query))
        {
        
    ?>
    <tr>
        <td><?php echo $row->C_id; ?></td>
        <td><?php echo $row->C_name; ?></td>
        <td><?php echo $row->Source_address; ?></td>
        <td><?php echo $row->Dest_address; ?></td>
        <td><?php echo $row->C_phno; ?></td>
        <td><?php echo $row->move_date; ?></td>
        <td><?php echo $row->C_email; ?></td>
        <td><?php echo $row->Dist_km; ?></td>
        <td><?php echo $row->T_id; ?></td>

    </tr>
        <?php
        }
    }
    
        ?>
</table>
</div>
<br>
<br>
<br>
<div class="cent">
<h1>vehicle information table</h1>
 <?php
    /*if(isset($_POST['submit']))
    {*/
    	?>
<table  cellpading="5" cellspacing="0" border="1"  align="center">
    <tr>
        <th>T_id</th>
        <th>vehicle type</th>
        <th>cost per km</th>
        <th>vehicle no.</th>
    </tr>
   <?php
    $sql="select * from veh_info";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0)
    {
        while($row=mysqli_fetch_object($query))
        {
        
    ?>
    <tr>
        <td><?php echo $row->T_id; ?></td>
        <td><?php echo $row->Veh_type; ?></td>
        <td><?php echo $row->CPKM; ?></td>
        <td><?php echo $row->Veh_no; ?></td>
    </tr>
        <?php
        }
    }
    
    mysqli_close($conn);
        ?>
</table>
</div>
<br>
<br>
<br>
<a href="update.php" >update records</a>
<br>
<br>
<br>
<a href="delete.php">delete records</a>
<br>
<br>
<br>
<a href="logout.php" style="margin-left: 590px">logout</a>

</body>
</html>