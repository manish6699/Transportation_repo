<?php
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['adpassword'])  && !isset($_SESSION['cusname']) && !isset($_SESSION['cuspassword']) && !isset($_SESSION['tranname']) && !isset($_SESSION['tranpassword']))
{
	header('location:easymove.php');
}
if(isset($_SESSION['username']) && isset($_SESSION['adpassword']))
{
 header('location:userpage.php');
}
if(isset($_SESSION['cusname']) && isset($_SESSION['cuspassword']))
{
	header('location:cusacc.php');
}
if(isset($_SESSION['tranname']) && isset($_SESSION['tranpassword']))
{
	header('location:tranacc.php');
}
?>