


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>

</title><link href="../css/style.css" rel="stylesheet" />
    <style type="text/css">
        .auto-style1 {
            width: 82%;
            height: 68px;
            text-align: center;
        }
        .auto-style2 {
            height: 24px;
        }
        .auto-style3 {
            width: 402px;
        }
        .auto-style4 {
            width: 402px;
            height: 31px;
        }
        .auto-style5 {
            height: 31px;
        }
        .auto-style6 {
            height: 27px;
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
				<a href="Category.php" >
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
    
 
   Links();
  </script>
       <div id="main" class="container">
           
           <form method="post" action="Category.php" id="form1">
    <div>
        
    <table class="auto-style1">
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>

        </tr>
        <tr>
            <td style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: xx-large; color: #E63900">Add Category </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <table class="auto-style1">
                    <tr>
                        <td class="auto-style4">Category Name</td>
                        <td class="auto-style5">&nbsp;<input name="Textcategory" type="text" id="ContentPlaceHolder1_TextBox1" class="txts" />
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style3">&nbsp;</td>
                        <td>
                            <input type="submit" name="ctl00$ContentPlaceHolder1$Button1" value="Add New" id="ContentPlaceHolder1_Button1" class="myButton" />
                        </td>
                    </tr>
                </table>
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style2"></td>
            <td class="auto-style2"></td>
        </tr>
        <tr>
            <td style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: xx-large; color: #E63900" class="auto-style6">View All</td>
            <td class="auto-style6"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <table class="auto-style1">
                    <tr>
                        <td>
                            <div>
	<table cellspacing="0" cellpadding="4" rules="rows" id="ContentPlaceHolder1_GridView1" style="color:Black;background-color:White;border-color:#CCCCCC;border-width:1px;border-style:None;width:265px;border-collapse:collapse;">
		<tr style="color:White;background-color:#333333;font-weight:bold;">
			<th scope="col">Category Name</th>
            <?php include("admin.php");
			$db=new admin;
			$sql="select * from category";
			$res=mysql_query($sql);
			 ?>
		</tr>
        <?php while($row=mysql_fetch_array($res)){ ?>
        <tr>
			<td><?php echo $row['catname']; ?></td>
		</tr>
        <?php } ?>
	</table>
</div>
                            
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
