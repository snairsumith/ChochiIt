


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>

</title><link href="../css/style.css" rel="stylesheet" />
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
        .auto-style2 {
            width: 754px;
            text-align: right;
        }
        .auto-style3 {
            width: 269px;
            height: 237px;
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
           
           <form method="post" action="EmailDeatils.php" id="form1">



    <div>
        
    <table class="auto-style1">
        <tr>
            <td class="auto-style2">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style2">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style2">
                <img alt="" class="auto-style3" src="../images/email.jpg" /></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style2">
                <input type="submit" name="ctl00$ContentPlaceHolder1$Button1" value="Send Email Alert" id="ContentPlaceHolder1_Button1" style="color:#FFFFCC;background-color:#FF3300;border-style:None;height:48px;width:268px;" />
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style2">
                <span id="ContentPlaceHolder1_Label1" style="color:Red;font-size:18pt;"></span>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>

    </div>
    </form>
       </div>
    
</body>
</html>
