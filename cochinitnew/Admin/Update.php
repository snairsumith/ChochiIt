<?php
$id=$_REQUEST['id'];
$title=$_POST['TextTitle'];
$module=$_POST['textModule'];
$tech=$_POST['TextTech'];
$bck=$_POST['TextBackEnd'];
$abs=$_POST['TextAbstract'];
$amt=$_POST['TextAmount'];
$uname=$_POST['TextUname'];
$date=$_POST['TextDate'];
include("admin.php");
$db=new admin;
$res=$db->UpdatePro($id,$title,$module,$tech,$bck,$abs,$amt,$uname,$date);





 ?>