<?php
$name=$_POST['pname'];
$desc=$_POST['description'];
$amt=$_POST['amount'];
$file=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"../Admin/".$file);
include("../Admin/admin.php");
$db=new admin;
$res=$db->insertProduct($name,$desc,$amt,$file);
if($res>0)
header("location:secAdminHome.php");


 ?>