<?php
session_start();
$name=$_POST['Textname'];
$pass=$_POST['Textpass'];
include("admin.php");
$db=new admin;
$res=$db->logincheck($name,$pass);
$row=mysql_fetch_array($res);
if($row>0)
{
	$_SESSION['uname']=$name;
if($row['role']=="admin")
{
	header("location:home.php");
}	
else if($row['role']=="User")
{
	header("location:../index.php");	
}
	
}

 ?>
 