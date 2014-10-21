 <?php 
 session_start();
 include("Admin/admin.php");
						$db=new admin;
						
						?>


<!DOCTYPE html>

<html xmlns="h<em></em>ttp://www.w3.org/1999/xhtml">
<head><title>

</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Stylesheets -->
<link rel="stylesheet" href="css/reset.css" /><link rel="stylesheet" href="css/styles.css" />
<!-- Scripts -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.roundabout-1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.roundabout-shapes-1.1.js"></script>
<script type="text/javascript">
    $(document).ready(function () { //Start up our Project Preview Carosuel
        $('ul#folio_scroller').roundabout({
            easing: 'easeOutInCirc',
            shape: 'waterWheel',
            duration: 600
        });
    });
</script>
<!--[if IE 6]>
<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script>DD_belatedPNG.fix('.button');</script>
<![endif]-->
    <style type="text/css">

        .auto-style1 {
            width: 100%;
        }
        .style1
        {
            width: 300px;
            height: 112px;
        }
    </style>
</head>
<body>
    <form method="post" action="GetDetails.aspx" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTg5MjIyOTgwMg9kFgICAw9kFgYCBQ8WAh4HVmlzaWJsZWhkAgcPFgIfAGgWEAIBDzwrAAkAZAIDDw9kDxAWAWYWARYCHg5QYXJhbWV0ZXJWYWx1ZWQWAQIEZGQCBQ88KwAJAGQCBw8PZA8QFgFmFgEWAh8BZBYBAgRkZAIJDzwrAAkAZAILDw9kDxAWAWYWARYCHwFkFgECBGRkAg0PPCsACQBkAg8PD2QPEBYBZhYBFgIfAWQWAQIEZGQCCQ8PFgIeBFRleHQFN1lvdSBhcmUgbm90IHJlZ2lzdGVyZCB1c2VyLlBsZWFzZSByZWdpc3RlciBhbmQgQ29udGludWVkZGQMZyDiZyv2Eejj8iwsahQbXJkO3L7AbRncB2tRzePHkA==" />
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="5D0280C1" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAOXoG9wT17uBI+GLQA5MozWTKsZVGVxtC0rN9GHgddtsA2IVyIvB0SuLqw3Ue/ciWdhmvmooFJxgSLIvD7YKo9rapk9GTXq4H3h6sqT/adx/A==" />
</div>
    <div id="wrapper" class="container_12 clearfix">
  <!-- Text Logo -->
  <h1 id="logo" class="grid_4"><img alt="" class="style1" 
          src="images/Cochin%20it%20logo3.png" /></h1>
  <!-- Navigation Menu -->
<ul id="navigation" class="grid_8">
<?php  if(isset($_SESSION['uname']))
{?>
     <li><a ><span class="meta">Hai, <?php echo $_SESSION['uname']; ?></span><a id="LinkButton1" href="sessionExp.php">Logout</a></a></li>
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
  <div class="hr grid_12 clearfix">&nbsp;</div>
  <!-- Catch Line and Link -->
  <h2 class="grid_12 caption clearfix">Our <span>Site</span>, home to our latest, and greatest work.</h2>
  <div class="hr grid_12 clearfix">&nbsp;</div>
  <!-- Column 1 / Project Information -->
        
  
  <!-- Column 2 / Image Carosuel -->
        <div></div>
  
  <div class="hr grid_12 clearfix">&jkg;</div>
  <!-- Client pickup line -->
       
 
      <?php 
	  if(isset($_SESSION['uname']))
	  {
		  ?>
        <div>
            <?php
if($_GET['type']=="prj")
{
		?>  
    <table class="auto-style1">
        <tr>
            <td style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: xx-large; color: #E63900">View Product Details </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;
                </td>
        </tr>
        <tr>
            <td colspan="2" style="background-color: #333333; color: #FFFFFF; font-size: large; font-family: arial, Helvetica, sans-serif;">Project  Details</td>
        </tr>
        <tr>
            <td colspan="2">
                <table id="ContentPlaceHolder1_DataList4" cellspacing="0" style="width:728px;border-collapse:collapse;">
	<tr>
		<td>
  
                        <table class="auto-style1" style="border-bottom-style: dotted; border-width: 1px; border-color: #FF3300">
                       <?php
					   $id=$_GET["PrjctId"];
					   $res=$db->SelectProj($id);
						while($row=mysql_fetch_array($res))
						{
						 ?>
                            <tr>
                                <td>
                                    <span id="ContentPlaceHolder1_DataList4_prjTitleLabel_0" style="color:#99CC00;font-size:24pt;"><?php echo $row['PrjTitle']; ?></span>
                                </td>
                                <td>uploded date :
                                    <span id="ContentPlaceHolder1_DataList4_dateLabel_0"><?php echo $row['Date']; ?></span>
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="color: #000000; font-size: small; font-family: vrinda">Modules&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                                    <span id="ContentPlaceHolder1_DataList4_prjModulesLabel_0"><?php echo $row['PrjModules']; ?></span>
                                    <br />
                                    Tecnologies&nbsp; :
                                    <span id="ContentPlaceHolder1_DataList4_tecLabel_0"><?php echo $row['Prjtec']; ?></span>
                                    <br />
                                    Back End&nbsp;&nbsp;&nbsp; :
                                    <span id="ContentPlaceHolder1_DataList4_backendLabel_0"><?php echo $row['PrjBackend']; ?></span>
                                    <br />
                                    Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;
                                    <span id="ContentPlaceHolder1_DataList4_amountLabel_0"><?php echo $row['PrjAmt']; ?></span>
                                </td>
                                <td style="color: #000000; font-size: small; font-family: vrinda">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>Upload By :<span id="ContentPlaceHolder1_DataList4_usernameLabel_0"><?php echo $row['Username']; ?></span>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                        &nbsp;<br />
                        <br />
                        <br />
                    </td>
	</tr><tr>
		<td>
                        
                        &nbsp;<br />
                        <br />
                        <br />
              </td>
	</tr>
</table>
         
            </td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;
                </td>
        </tr>
       
        <tr>
            <td colspan="2">
                <table id="ContentPlaceHolder1_DataList3" cellspacing="0" style="width:563px;border-collapse:collapse;">
	<tr>
		<td>
                        
                    </td>
	</tr><tr>
		<td>
                       
                            </tr>
                        </table>
                    </td>
	</tr>
</table>
        <?php
} ?>               
            </td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;
                </td>
        </tr>
        <tr>
            <td colspan="2" style="background-color: #333333; color: #FFFFFF; font-size: large; font-family: arial, Helvetica, sans-serif;">Seminar  Details</td>
        </tr>
        <tr>
            <td colspan="2">
                <table id="ContentPlaceHolder1_DataList2" cellspacing="0" style="width:563px;border-collapse:collapse;">
	<tr>
		<td>
          <?php
          if($_GET['type']=="sem")
{
	
?>   
                        <table class="auto-style1" style="border-bottom-style: dotted; border-width: 1px; border-color: #FF3300">
                        <?php 
						$id=$_GET["semId"];
						$res1=$db->SelectSeminar($id);
						while($row=mysql_fetch_array($res1))
						{
						?>
                            <tr>
                                <td>
                                    <span id="ContentPlaceHolder1_DataList2_semTitleLabel_0" style="color:#669900;font-size:24pt;"><?php echo $row['semTitle']; ?></span>
                                </td>
                                <td>Date Of Upload :
                                    <span id="ContentPlaceHolder1_DataList2_dateLabel_0"><?php echo $row['date']; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: small; color: #000000">
                                    <span id="ContentPlaceHolder1_DataList2_semDescLabel_0"><?php echo $row['semDesc']; ?></span>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: small; color: #000000">Amount:
                                    <span id="ContentPlaceHolder1_DataList2_amountLabel_0"><?php echo $row['amount']; ?></span>
                                    <br />
                                    Tecnology :
                                    <span id="ContentPlaceHolder1_DataList2_tecLabel_0"><?php echo $row['tec']; ?></span>
                                    <br />
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>Upload By :
                                    <span id="ContentPlaceHolder1_DataList2_usernameLabel_0"><?php echo $row['username']; ?></span>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                        <?php } ?>
                        <br />
                    </td>
	</tr>
</table>
                
            </td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;
                </td>
        </tr>
        <tr>
            <td colspan="2" style="background-color: #333333; color: #FFFFFF; font-size: large; font-family: arial, Helvetica, sans-serif;">Product  Details</td>
        </tr>
       
        <tr>
            <td colspan="2">
                <table id="ContentPlaceHolder1_DataList1" cellspacing="0" style="border-collapse:collapse;">
	<tr>
		<td>
          <?php
if($_GET['type']=="prd")
{
	$id=$_GET['prdtId'];
	$res2=$db->SelectPrdt($id);
		while($row=mysql_fetch_array($res2))
		{ 
		?>  
                        <table class="auto-style1" style="border-bottom-style: dotted; border-width: 1px; border-color: #FF3300">
                            <tr>
                                <td>
                                    <img id="ContentPlaceHolder1_DataList1_Image1_0" src="<?php echo $row['Image']; ?>" style="height:137px;width:224px;" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span id="ContentPlaceHolder1_DataList1_PrdNameLabel_0" style="font-size:24pt;"><?php echo $row['PrdtName']; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span id="ContentPlaceHolder1_DataList1_prdDescLabel_0"><?php echo $row['PrdtDesc']; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span id="ContentPlaceHolder1_DataList1_prdAmountLabel_0" style="color:Red;font-size:9pt;"><?php echo $row['PrdtAmnt']; ?></span>
                                </td>
                            </tr>
                           
                        </table>
                         <?php } 
}?>
                        <br />
<br />
                    </td><td>
                        <table class="auto-style1" style="border-bottom-style: dotted; border-width: 1px; border-color: #FF3300">
                            <tr>
                                
                            </tr>
                        </table>
                        <br />
<br />
                    </td><td></td><td></td>
	</tr>
</table>
                
            </td>
        </tr>
    </table>
 <a href="buynow.php?type=<?php $_GET["type"] ?>">Buy now</a>
	 
    </div>
    <?php
	  }
	  else
	  {
		  ?>
          
           <h2 class="grid_12 caption">Like this project? We can do something similar for you. <a href="#"><span>Get in touch...</span></a><br /><span id="lblMsg" style="color:Red;font-size:18pt;">You are not registerd user.Please register and Continue</span></h2>
        <h2>&nbsp; </h2>
          <?php
	  }
	  ?>
  <div class="hr grid_12 clearfix">&nbsp;</div>
  <!-- Footer -->
  <p class="grid_12 footer clearfix"> <span class="float"><b>&copy; Copyright 2010. All Rights Reserved</b> | Design by <a href="http://www.qwibbledesigns.co.uk/">QwibbleDesigns</a></span> <a class="float right" href="#">top</a> </p>
        <input type="hidden" name="hdAmount" id="hdAmount" />
        <input type="hidden" name="hdPayFor" id="hdPayFor" />
</div>
    </form>
</body>
</html>
