<?php
$cat=$_POST['Textcategory'];
include("admin.php");
$db1=new admin;
$r=$db1->AddCat($cat);
if($r>0)
{
header("location:Addcategory.php");	
}
else
{
echo "Category No Added";	
}

 ?>