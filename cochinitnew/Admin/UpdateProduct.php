<?php
$id=$_REQUEST['id']; 
$title=$_POST['TextTitle'];
$des=$_POST['textDes'];
$date=$_POST['TextDate'];
$amt=$_POST['TextAmount'];
include("admin.php");
$db=new admin;
$res=$db->UpdatePrdct($id,$title,$des,$date,$amt);
				
if($res>0)
header("Location:EditDeatils.php");
 ?>