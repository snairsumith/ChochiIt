<?php
session_start();
$s=$_SESSION['uname'];
if($_GET['type']=="prj")
$tit="Project";
else if($_GET['type']=="prd")
$tit="Product";
else if($_GET['type']=="sem")
$tit="Seminar";
$amount=3000;
$redirectUrl="";
$redirectUrl=$redirectUrl."https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_xclick&business="."snairsumith-facilitator@gmail.com";
$redirectUrl=$redirectUrl."&first_name=".$s;
$redirectUrl=$redirectUrl."&item_name=".$tit;
$redirectUrl=$redirectUrl."&amount=".$amount;
$redirectUrl=$redirectUrl."&business=snairsumith-facilitator@gmail.com";
$redirectUrl=$redirectUrl."&quantity=1";
$redirectUrl=$redirectUrl."&return=localhost/sucess.php";
$redirectUrl=$redirectUrl."&cancel_return=localhost/faile.php";

//echo $redirectUrl;
header("location:$redirectUrl");





 ?>