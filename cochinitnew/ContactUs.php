


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	Cochin.it
</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Stylesheets -->
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles.css" />
<!-- Scripts -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<!--[if IE 6]>
<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script>DD_belatedPNG.fix('.button');</script>
<![endif]-->
    
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
</head>
<body>
    

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

	
    <div id="wrapper" class="container_12 clearfix">
  <!-- Text Logo -->
  <h1 id="logo" class="grid_4">
      <img alt="" class="style1" src="images/Cochin%20it%20logo3.png" /></h1>
  <!-- Navigation Menu -->
          <ul>
        

      </ul>
  <ul id="navigation" class="grid_8">
     <li><a ><span class="meta">Account</span><a id="LinkButton1" href="Admin/index.php">LOGIN</a></a></li>
    <li><a href="ContactUs.php"><span class="meta">Get in touch</span><br />Feedback</a></li>
     
    <li><a href="NewUpdates.php"><span class="meta">Our latest work</span><br />
        New Updates</a> </li>
    <li><a href="Aboutsus.php"><span class="meta">Who are we?</span><br />
      Reach Us</a></li>
    <li><a href="Admin/index.php"><span class="meta">Homepage</span><br />
      Home</a></li>
      
      

  </ul>
  <div class="hr grid_12 clearfix">&nbsp;</div>
  <!-- Caption Line -->
  <h2 class="grid_12 caption">An <span>Eye</span> for IT.</h2>
  <div class="hr grid_12 clearfix">&nbsp;</div>
  <!-- Column 1 / Content -->
  <div class="grid_8">
   
    <div>
        
  
<form action="phpmail/mail.php" method="post">
    <table class="auto-style1">
        <tr>
            <td colspan="2"><h3>Share Your Thoughts</h3>&nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style14">
                <span id="ContentPlaceHolder1_Label1" style="color:White;background-color:Black;font-size:24pt;"></span>
                <p style="font:'Times New Roman', Times, serif;color:#F00;background-color:#333;width:100%;height:20px;">
                <?php
				if(isset($_GET['msg']))
				{
					if($_GET['msg']=="0")
					{
						echo "Message not send.Please try again later.!!";
					}
					else
					{
						echo "Message send sucessfully";
					}
				}
				?>
                </p>
            </td>
            <td class="auto-style14"></td>
        </tr>
        <tr>
            <td class="auto-style14">Title</td>
            <td class="auto-style14"></td>
        </tr>
        <tr>
            <td>
                <input name="name" type="text" id="name" class="auto-style13" style="height:25px;width:528px;" />
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Email Id</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <input name="email" type="text" id="email" class="auto-style13" style="height:25px;width:528px;" />
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Message /Complaints</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <textarea name="comments" rows="2" cols="20" id="comments" class="auto-style13" style="height:68px;width:528px;">
</textarea>
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="btn" value="Send" id="rt" style="color:White;background-color:Black;border-style:None;" />
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
  </form>


    </div>
   
  </div>
  <!-- Column 2 / Sidebar -->
  <div id="latnew" class="grid_4">
    <h4>Latest News</h4>
    <div class="hr dotted clearfix">&nbsp;</div>
    <dl class="history">
      <dt>1994</dt>
      <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel diam id mauris accumsan egestas. Sed sed lorem. Integer id mi vel sapien fermentum vehicula. Pellentesque vitae lacus a sem posuere fringilla. Vestibulum dolor.</dd>
      <dt>1996</dt>
      <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel diam id mauris accumsan egestas. Sed sed lorem. Integer id mi vel sapien fermentum vehicula. Pellentesque vitae lacus a sem posuere fringilla. Vestibulum dolor.</dd>
      <dt>2000</dt>
      <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel diam id mauris accumsan egestas. Sed sed lorem. Integer id mi vel sapien fermentum vehicula. Pellentesque vitae lacus a sem posuere fringilla. Vestibulum dolor.</dd>
      <dt>2003</dt>
      <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel diam id mauris accumsan egestas. Sed sed lorem. Integer id mi vel sapien fermentum vehicula. Pellentesque vitae lacus a sem posuere fringilla. Vestibulum dolor.</dd>
      <dt>2009</dt>
      <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel diam id mauris accumsan egestas. Sed sed lorem. Integer id mi vel sapien fermentum vehicula. Pellentesque vitae lacus a sem posuere fringilla. Vestibulum dolor.</dd>
    </dl>
  </div>
  <div class="hr grid_12 clearfix">&nbsp;</div>
  <!-- Footer -->
  <p class="grid_12 footer clearfix"> <span class="float"><b>&copy; Copyright 2010. All Rights Reserved</b> | Design by <a href="/">cochin.it</a></span> <a class="float right" href="#">top</a> </p>
</div>
   
</body>
</html>
