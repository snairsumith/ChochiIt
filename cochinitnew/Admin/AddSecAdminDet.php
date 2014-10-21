<?php
$name=$_POST['Textname'];
$cat=$_POST['cat'];
$email=$_POST['TextEmail'];
$phn=$_POST['TextPhn'];
$uname=$_POST['TextUname'];
$pass=$_POST['TextPass'];
$role=secadmin;
include("admin.php");
$db=new admin;
$res=$db->InsertSecAd($name,$cat,$email,$phn,$uname,$pass);
$res1=$db->InsertSecLog($uname,$pass,$role);
if($res>0)
header("location:AddSecAdmin.php");
else
echo "Registration Failed";
 ?>