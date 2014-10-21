<?php
$id=$_REQUEST['id'];
$title=$_POST['TextTitle'];
$desc=$_POST['textDes'];
$tech=$_POST['TextTech'];
$bck=$_POST['TextAmount'];
$abs=$_POST['TextUname'];
$amt=$_POST['TextAmount'];
$uname=$_POST['TextUname'];
$date=$_POST['TextDate'];
include("admin.php");
$db=new admin;
$res=$db->UpdateSeminar($id,$title,$desc,$tech,$bck,$abs,$amt,$uname,$date);
header("location:EditDeatils.php");
?>