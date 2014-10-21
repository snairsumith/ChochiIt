<?php
session_start();
?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>

</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Stylesheets -->
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles.css" />
  
 
<!-- Scripts -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.roundabout-1.0.min.js"></script>
<script type="text/javascript" src="../js/roundabout.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.2.js"></script>
<script type="text/javascript">
    $(document).ready(function () { //Start up our Featured Project Carosuel
        $('#featured ul').roundabout({
            easing: 'easeInOutQuint',
            duration: 300
        });
    });
</script>
<!--[if IE 6]>
<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script>DD_belatedPNG.fix('.button');</script>
<![endif]-->
    <style type="text/css">
        .auto-style1 {
            font-size: large;
        }
        .style1
        {
            width: 300px;
            height: 112px;
        }
        #LinkButton1 {
            margin-top:-43px;
        }
    </style>
</head>
<body>
    <form method="post" action="index.aspx" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTU0NTE3MDc2Ng9kFgICAw9kFgICAw8PFgIeBFRleHQFBUxPR0lOZGRkXXjPyf7xZ84LgdQzi96/zcX00jeXNPCpnDTGF3ZrlRc=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="C305EA68" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAJ/b376kjgxtZW8zw+N4YnutTfNpOz0CH4vKngBfzxDIS3R4VKdMvUZGd/R8oSLEP7nR+LFZ1bEcAwGVcUbggyL" />
</div>
   <div id="wrapper" class="container_12 clearfix">
  <!-- Text Logo -->
  <h1 id="logo" class="grid_4">
      <img alt="cochinit logo" class="style1" src="images/Cochin it logo3.png" /></h1>
  <!-- Navigation Menu -->
      <ul>
        

      </ul>
      
      
 <ul id="navigation" class="grid_8">
<?php  if(isset($_SESSION['uname']))
{?>
     <li><a ><span class="meta">Hai, <?php echo $_SESSION['uname']; ?></span><a id="LinkButton1" href="sessionExp.php">Logout</a></a></li>
      <li><a ><span class="meta">chat </span><a id="LinkButton1" href="chat/sampleb.php">Chat</a></a></li>
     <?php
}
else
{
	 ?>
       <li><a ><span class="meta">Account</span><a id="LinkButton1" href="Admin/index.php">Login</a></a></li>
       <?php
}
	   ?>
    <li><a href="ContactUs.php"><span class="meta">Get in touch</span><br />Feedback</a></li>
     
    <li><a href="NewUpdates.php"><span class="meta">Our latest work</span><br />
        New Updates</a> </li>
    <li><a href="Aboutsus.php"><span class="meta">Who are we?</span><br />
      Reach Us</a></li>
    <li><a href="index.php"><span class="meta">Homepage</span><br />
      Home</a></li>
      
      

  </ul>
  <div class="hr grid_12">&nbsp;</div>
  <div class="clear"></div>
  <!-- Featured Image Slider -->
  <div id="featured" class="clearfix grid_12">
    <ul>
      <li> <a href="NewUpdates.php"> <span>Read about this project</span> <img src="images/1.gif" alt="" /> </a> </li>
      <li> <a href="NewUpdates.php"> <span>Read about this project</span> <img src="images/2.gif" alt="" /> </a> </li>
      <li> <a href="NewUpdates.php"> <span>Read about this project</span> <img src="images/1.gif" alt="" /> </a> </li>
      <li> <a href="#"> <span>Read about this project</span> <img src="images/2.gif" alt="" /> </a> </li>
      <li> <a href="#"> <span>Read about this project</span> <img src="images/600x300.gif" alt="" /> </a> </li>
    </ul>
  </div>
  <div class="hr grid_12 clearfix">&nbsp;</div>
  <!-- Caption Line -->
  <h2 class="grid_12 caption clearfix">Welcome! This is <span>Cochin.it</span>,An eye for an IT <u></u> &amp; <u></u> sharing all iT related information in cochin. You can get all iT based information by going through this </h2>
  <div class="hr grid_12 clearfix quicknavhr">&nbsp;</div>
  <div id="quicknav" class="grid_12"> <a class="quicknavgrid_3 quicknav alpha" href="#">
    <h4 class="title ">Latest Projects</h4>
    <p>Here you can get latest project ideas</p>
    <p style="text-align:center;"><img alt="" src="images/Art_Artdesigner.lv.png" /><a href="MoreDetails.aspx?type=p">Click Here</p></a>
    </a> <a class="quicknavgrid_3 quicknav" href="#">
    <h4 class="title ">Latest Seminar's</h4>
    <p>New seminars are included here </p>
 <p style="text-align:center;"><img alt="" src="images/info.png" /><a href="MoreDetails.aspx?type=s">Click Here</p></a>
    </a> <a class="quicknavgrid_3 quicknav" href="#">
    <h4 class="title ">Latest Job's</h4>
    <p>New job opportunities</p>
    <p style="text-align:center;"><img alt="" src="images/Blog_Artdesigner.lv.png" /><a href="MoreDetails.aspx?type=j">Click Here</p></a>
    </a> <a class="quicknavgrid_3 quicknav" href="#">
    <h4 class="title ">New Product's</h4>
    <p>New iT related products. </p>
    <p style="text-align:center;"><img alt="" src="images/hungry_bird.png" /><a href="MoreDetails.aspx?type=pr">Click Here</p></a>
    </a> </div>
  <div class="hr grid_12 clearfix">&nbsp;</div>
  <!-- Footer -->
  <p class="grid_12 footer clearfix"> <span class="float"><b>&copy; Copyright 2010. All Rights Reserved</b> | Design by <a href="/">cochin.it</a></span> <a class="float right" href="#">top</a> </p>
</div>
<!--end wrapper-->
    </form>
</body>
</html>
