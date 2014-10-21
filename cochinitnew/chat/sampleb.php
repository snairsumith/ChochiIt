<?php
session_start();
echo "haiii".$_SESSION['uname'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/loose.dtd" >

<html>
<head>
<title>Sample Chat Application</title>
<link rel="stylesheet" href="../css/reset.css" />
<link rel="stylesheet" href="../css/styles.css" />
<!-- Scripts -->
  
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
    .auto-style13 {}
    .auto-style14 {
        height: 32px;
    }
    </style>

    <style type="text/css">
        .style1
        {
            width: 253px;
            height: 91px;
        }
        #Home
        {
            margin-top:-43px;
        }
    </style>
<style>
body {
	background-color: #eeeeee;
	padding:0;
	margin:0 auto;
	font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
	font-size:11px;
}
</style>

<link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="css/screen.css" />

<!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" media="all" href="css/screen_ie.css" />
<![endif]-->

</head>
<body>
<div id="wrapper" class="container_12 clearfix">
  <!-- Text Logo -->
  <h1 id="logo" class="grid_4">
      <img alt="" class="style1" src="../images/Cochin%20it%20logo3.png" /></h1>
  <!-- Navigation Menu -->
          <ul>
        

      </ul>
  <ul id="navigation" class="grid_8">
     <li><a ><span class="meta">Account</span><a id="LinkButton1" href="../sessionExp.php">Logout</a></a></li>
    <li><a href="../ContactUs.php"><span class="meta">Get in touch</span><br />Feedback</a></li>
     
    <li><a href="../NewUpdates.php"><span class="meta">Our latest work</span><br />
        New Updates</a> </li>
    <li><a href="../Aboutsus.php"><span class="meta">Who are we?</span><br />
      Reach Us</a></li>
    <li><a href="../Admin/index.php"><span class="meta">Homepage</span><br />
      Home</a></li>
      
      

  </ul>
  <div class="hr grid_12 clearfix">&nbsp;</div>
  <!-- Caption Line -->
  <h2 class="grid_12 caption">An <span>Eye</span> for IT.</h2>
  <div class="hr grid_12 clearfix">&nbsp;</div>
  <!-- Column 1 / Content -->
  <div class="grid_8">
   
    <div></div>
   
  </div>
  <!-- Column 2 / Sidebar -->
  <div id="latnew" class="grid_4">
    <h4>Chat With Admin</h4>
    <div class="hr dotted clearfix">&nbsp;</div>
  <ul>
<?php

include("../Admin/admin.php");
$db=new admin;
$res=$db->selectEmpUname();
while($row=mysql_fetch_array($res))
{
?>
<li>
<a href="javascript:void(0)" onclick="javascript:chatWith('<?php echo $row["uname"] ?>')"><?php echo $row["uname"] ?> </a>
</li>
<?php
}
?>
</ul>


  </div>
  <div class="hr grid_12 clearfix">&nbsp;</div>
  <!-- Footer -->
  <p class="grid_12 footer clearfix"> <span class="float"><b>&copy; Copyright 2010. All Rights Reserved</b> | Design by <a href="/">cochin.it</a></span> <a class="float right" href="#">top</a> </p>
</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chat.js"></script>

</body>
</html>