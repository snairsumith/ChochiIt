<?php
session_start();
$title=$_POST['stittle'];
$sdesc=$_POST['sdescription'];
$stech=$_POST['stechnologies'];
$amt=$_POST['amt'];
$fdoc=$abst=$_FILES['files']['doc'];
$uname=$_SESSION['uname'];
move_uploaded_file($_FILES['file']['tmp_name'],"../Admin/".$fdoc);
include("../Admin/admin.php");
$db=new admin;
$res=$db->insertseminar($title,$sdesc,$stech,$amt,$fdoc,$uname);
if($res>0)
header("location:secAdminHome.php");

 ?>