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
           
           <form method="post" action="AddSecAdminDet.php" id="form1">






    <div>
        
    <table class="auto-style1">
        <tr>
            <td style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: xx-large; color: #E63900" class="auto-style4">Add Second Admin </td>
            <td style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: xx-large; color: #E63900" class="auto-style4">View&nbsp; Admin Details </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td rowspan="2" style="vertical-align: top">
                            <div>
	<table cellspacing="0" cellpadding="3" rules="cols" id="ContentPlaceHolder1_GridView1" style="color:Black;background-color:White;border-color:#999999;border-width:1px;border-style:Solid;width:388px;border-collapse:collapse;">
		<tr style="color:White;background-color:Black;font-weight:bold;">
			<th scope="col">name</th><th scope="col">
            catname</th><th scope="col">
            email</th><th scope="col">
            phno</th><th scope="col">
            username</th><th scope="col">&nbsp;</th>
		</tr>
        <?php include("admin.php");
		$db=new admin;
		
		$sql="select category.catname,name,email,phn,uname from category inner join secadmdet on category.catid=secadmdet.catid";
		$res=mysql_query($sql);
		while($row=mysql_fetch_array($res)){
		?>
        <tr>
			<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
            <td><input type="text" name="catname" value="<?php echo $row['0']; ?>"></td>
            <td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
            <td><input type="text" name="phn" value="<?php echo $row['phn']; ?>"></td>
            <td><input type="text" name="uname" value="<?php echo $row['uname']; ?>"></td>
            <td><a href="" style="color:Black;">Delete</a></td>
            <?php } ?>
		</tr>
	</table>
</div>
                            </td>
        </tr>
        <tr>
            <td>
                <table class="auto-style1">
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">&nbsp;Name</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">&nbsp;<input name="Textname" type="text" id="ContentPlaceHolder1_TextBox1" class="txts" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">Category</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">
                        <?php 
						$sql="select * from category";
						$res=mysql_query($sql);
						?>
                            <select name="cat" id="ContentPlaceHolder1_DropDownList1" class="txts">
                      
                        <?php while($row=mysql_fetch_array($res)){ ?>
                        
	<option value="<?php echo $row['catid']; ?>"><?php echo $row['catname']; ?></option>
	<?php } ?>

</select>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style2" style="padding-top: 5px; padding-bottom: 5px">Email Id</td>
                        <td class="auto-style2" style="padding-top: 5px; padding-bottom: 5px">
                            <input name="TextEmail" type="text" id="ContentPlaceHolder1_TextBox2" class="txts" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">Phone No</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">
                            <input name="TextPhn" type="text" id="ContentPlaceHolder1_TextBox3" class="txts" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">Username</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">
                            <input name="TextUname" type="text" id="ContentPlaceHolder1_TextBox4" class="txts" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">Password</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">
                            <input name="TextPass" type="password" id="ContentPlaceHolder1_TextBox5" class="txts" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">Conform Password</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">
                            <input name="TextCPass" type="password" id="ContentPlaceHolder1_TextBox6" class="txts" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">&nbsp;</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">&nbsp;
                            </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px; padding-bottom: 5px">&nbsp;</td>
                        <td style="padding-top: 5px; padding-bottom: 5px">
                            <input type="submit" name="ctl00$ContentPlaceHolder1$Button1" value="Add New" id="ContentPlaceHolder1_Button1" class="myButton" />
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
