<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>

</title><link href="../css/style.css" rel="stylesheet" />
    <style type="text/css">
        .auto-style1 {
            width: 99%;
            height: 34px;
        }
    .auto-style2 {
        height: 25px;
    }
        .auto-style3 {
            width: 100%;
            height: 46px;
        }
        .auto-style4 {
            height: 114px;
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
			
			</li>
			<li>
				<a href="ProductDeatils.php">
					<i class="fa fa-picture-o"></i>
					<strong>Product Deatils</strong>
					<small>sweet home</small>
				</a>
			</li>
			<li>
				<a href="../Default.php">
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
       <?php $id=$_REQUEST['id']; 
				include("admin.php");
				$db=new admin;
				$res=$db->SelectProj($id);
				$row=mysql_fetch_array($res);
				
				
				?>
           
           <form method="post" action="Update.php?id=<?php echo $row['PrjctId']; ?>" id="form1">






    <div>
        
    <table class="auto-style1">
        <tr>
            <td style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: xx-large; color: #E63900" class="auto-style4">Edit Project Details</td>
            
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td rowspan="2" style="vertical-align: top">
                            
                            </td>
        </tr>
        <tr>
            <td>
                <table class="auto-style1">
                
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">&nbsp;Title</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">&nbsp;<input name="TextTitle" type="text" id="ContentPlaceHolder1_TextBox1" class="txts" value="<?php echo $row['PrjTitle']; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">Module</td>
                        <td style="padding-top: 5px; padding-bottom: 5px"><span class="auto-style2" style="padding-top: 5px; padding-bottom: 5px">
                          <textarea name="textModule" id="ContentPlaceHolder1_TextBox7" class="txts" ><?php echo $row['PrjModules']; ?></textarea>
                        </span></td>
                    </tr>
                    <tr>
                        <td class="auto-style2" style="padding-top: 5px; padding-bottom: 5px">Technology</td>
                        <td class="auto-style2" style="padding-top: 5px; padding-bottom: 5px">
                            <input name="TextTech" type="textTech" id="ContentPlaceHolder1_TextBox2" class="txts" value="<?php echo $row['Prjtec']; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">Back End</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">
                            <input name="TextBackEnd" type="text" id="ContentPlaceHolder1_TextBox3" class="txts" value="<?php echo $row['PrjBackend']; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">Abstract</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">
                            <textarea name="TextAbstract"  id="ContentPlaceHolder1_TextBox4" class="txts" value=""><?php echo $row['PrjAbstract']; ?> </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">Amount</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">
                            <input name="TextAmount" type="text" id="ContentPlaceHolder1_TextBox5" class="txts" value="<?php echo $row['PrjAmt']; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">Username</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">
                            <input name="TextUname" type="text" id="ContentPlaceHolder1_TextBox6" class="txts" value="<?php echo $row['Username']; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">Date</td>
                        <td style="padding-top: 5px; padding-bottom: 5px"><input name="TextDate" type="text" id="ContentPlaceHolder1_TextBox6" class="txts" value="<?php echo $row['Date']; ?>" />
                            </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">&nbsp;</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">
                            <input type="submit" name="ctl00$ContentPlaceHolder1$Button1" value="Update" id="ContentPlaceHolder1_Button1" class="myButton" />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <span id="ContentPlaceHolder1_Label1" style="color:Red;"></span>
                        </td>
                    </tr>
                    </table>
            </td>
        </tr>
        <tr>
            <td>&nbsp;
                </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: xx-large; color: #E63900">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;
                </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <table class="auto-style3">
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                </table>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>

    </div>
    </form>
       </div>
    
</body>
</html>
