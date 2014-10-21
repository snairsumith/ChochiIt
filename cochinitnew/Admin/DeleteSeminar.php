<?php 
$id=$_REQUEST['id'];
include("admin.php");
$db=new admin;
$res=$db->DeleteSeminar($id);
?>