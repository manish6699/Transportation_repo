<?php
session_start();
/*
if(($_SESSION['username']!='') && ($_SESSION['adpassword']!=''))
{
$_SESSION['username']='';
$_SESSION['adpassword']='';
}
if(($_SESSION['cusname'])!='' && ($_SESSION['cuspassword']!=''))
{
$_SESSION['cusname']='';
$_SESSION['cuspassword']='';
}
if(($_SESSION['tranname']!='') && ($_SESSION['tranpassword'])!='')
{
$_SESSION['tranname']='';
$_SESSION['tranpassword']='';
}*/
session_unset();
session_destroy();
echo "sucessful logout";
header('location:easymove.php');

?>