<?php
session_start();
$title=$_POST['ptittle2'];
$desc=$_POST['pdescription'];
$mod=$_POST['pmodules'];
$tech=$_POST['technologies'];
$bend=$_POST['bend'];
$amt=$_POST['amt'];
$abst=$_FILES['files']['abst'];
$uname=$_SESSION['uname'];
move_uploaded_file($_FILES['file']['tmp_name'],"../Admin/".$abst);
$psandpd=$_FILES['files']['psandpd'];
move_uploaded_file($_FILES['file']['tmp_name'],"../Admin/".$psandpd);
include("../Admin/admin.php");
$db=new admin;
$res=$db->insertPrject($title,$desc,$mod,$tech,$bend,$amt,$abst,$psandpd,$uname);
if($res>0)
header("location:secAdminHome.php");
 ?>
 