


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>

</title><link href="../css/style.css" rel="stylesheet" />
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
<nav>
		<ul class="mcd-menu">
			<li>
				<a href="home.php" class="active">
					<i class="fa fa-home"></i>
					<strong>Home</strong>
					<small>sweet home</small>
				</a>
			</li>
			<li>
				<a href="Addcategory.php" >
					<i class="fa fa-edit"></i>
					<strong>Category</strong>
					<small>sweet home</small>
				</a>
			</li>
			<li>
				<a href="AddSecAdmin.php">
					<i class="fa fa-gift"></i>
					<strong>Second Admin</strong>
					<small>sweet home</small>
				</a>
			</li>
			<li>
				<a href="EditDeatils.php">
					<i class="fa fa-globe"></i>
					<strong>Edit Products</strong>
					<small>sweet home</small>
				</a>
			</li>
			<li>
				<a href="EmailDeatils.php">
					<i class="fa fa-comments-o"></i>
					<strong>Email Alert</strong>
					<small>what they say</small>
				</a>
			
			</li>			<li>
				<a href="ProductDeatils.php">
					<i class="fa fa-picture-o"></i>
					<strong>Product Deatils</strong>
					<small>sweet home</small>
				</a>
			</li>
			<li>
				<a href="index.php">
					<i class="fa fa-envelope-o"></i>
					<strong>Logout</strong>
					<small>drop a line</small>
				</a>
			</li>
			<li class="float">
				<a class="search">
					<input type="text" value="search ...">
					<button><i class="fa fa-search"></i></button>
				</a>
				<a href="" class="search-mobile">
					<i class="fa fa-search"></i>
				</a>
			</li>
		</ul>
	</nav>
</div>
    
   
       <div id="main" class="container">
           
           <form method="post" action="ProductDeatils.aspx" id="form1">


    <div>
        
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
                        <?php include("admin.php");
						$db=new admin;
						$res=$db->SelectPrjctDets();
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
                        <table class="auto-style1" style="border-bottom-style: dotted; border-width: 1px; border-color: #FF3300">
                        <?php 
						$res1=$db->SelectSem();
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
        <?php
		$res2=$db->SelectProduct();
		while($row=mysql_fetch_array($res2))
		{ ?>
        <tr>
            <td colspan="2">
                <table id="ContentPlaceHolder1_DataList1" cellspacing="0" style="border-collapse:collapse;">
	<tr>
		<td>
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
                            <?php } ?>
                        </table>
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

    </div>
    </form>
       </div>
    
</body>
</html>
