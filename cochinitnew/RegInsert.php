<?php
$name=$_POST['TextName'];
$email=$_POST['TextEmail'];
$phn=$_POST['TextPhn'];
$uname=$_POST['TextUname'];
$pass=$_POST['TextPass'];
include("Admin/admin.php");
$db=new admin;
$res=$db->InsetUDetails($name,$email,$phn,$uname,$pass);
$res1=$db->insertLogin($uname,$pass,'User');
if($res>0)
header("location:Admin/index.php");


 ?>