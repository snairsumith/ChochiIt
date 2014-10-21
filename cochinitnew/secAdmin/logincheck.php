<?php
session_start();
$name=$_POST['Textname'];
$pass=$_POST['Textpass'];
include("../Admin/admin.php");
$db=new admin;
$res=$db->logincheckSecadmin($name,$pass);
$row=mysql_fetch_array($res);
if($row>0)
{
	$_SESSION['uname']=$name;
	$_SESSION['catid']=$row['catid'];
	header("location:secAdminHome.php");
}

 ?>
 