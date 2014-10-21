


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
    
  
    


        
    <table class="auto-style1">
        <tr>
             <td style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: xx-large; color: #E63900">Edit Details  </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" style="background-color: #333333; color: #FFFFFF; font-size: large; font-family: arial, Helvetica, sans-serif;">Project Details</td>
        </tr>
        <tr>
            <td>
                <div>
	<table cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_GridView1" style="width:890px;border-collapse:collapse;">
		<tr>
			<th scope="col">Project_Title</th><th scope="col">Module</th><th scope="col">Technologies</th><th scope="col">backend</th><th scope="col">Abstract</th><th scope="col">amount</th><th scope="col">username</th><th scope="col">date</th><th scope="col">&nbsp;</th><th scope="col">&nbsp;</th>
		</tr>
        <?php
		include("admin.php");
		$db=new admin;
		$res=$db->SelectPrjctDets();
		while($row=mysql_fetch_array($res)){
		 ?><tr>
			<td><input name="" type="text" value="<?php echo $row['PrjTitle'];?>"></td>
			<td><input name="" type="text" value="<?php echo $row['PrjModules'];?>"></td>
			<td><input name="" type="text" value="<?php echo $row['Prjtec'];?>"></td>
			<td><input name="" type="text" value="<?php echo $row['PrjBackend'];?>"></td>
			<td><input name="" type="text" value="<?php echo $row['PrjAbstract'];?>"></td>
			<td><input name="" type="text" value="<?php echo $row['PrjAmt'];?>"></td>
			<td><input name="" type="text" value="<?php echo $row['Username'];?>"></td>
			<td><input name="" type="text" value="<?php echo $row['Date'];?>"></td><td><a href="EditPrjct.php?id=<?php echo $row['PrjctId'];?>">Edit</a></td><td><a href="DeletePrjct.php?id=<?php echo $row['PrjctId'];?>">Delete</a></td>
		</tr>
        <?php } ?>
	</table>
</div>
                
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
        
            <td colspan="2" style="background-color: #333333; color: #FFFFFF; font-size: large; font-family: arial, Helvetica, sans-serif;">Seminar  Details</td>
            <td>&nbsp;</td>
        </tr>
          <tr>
            <td>
                <div>
	<table cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_GridView2" style="width:579px;border-collapse:collapse;">
    <?php 
		$res1=$db->SelectSem();
		while($row=mysql_fetch_array($res1))
		{
		?>
		<tr>
			<th scope="col">Sem_Title</th><th scope="col">Descriptions</th><th scope="col">tec</th><th scope="col">amount</th><th scope="col">date</th><th scope="col">username</th><th scope="col">&nbsp;</th><th scope="col">&nbsp;</th>
		</tr><tr>
			<td><input name="TextTitle" type="text" value="<?php echo $row['semTitle'];?>"></td>
			<td><textarea name="TextDesc" type="text" ><?php echo $row['semDesc'];?>"</textarea>
			<td><input name="Texttech" type="text" value="<?php echo $row['tec'];?>"></td>
			<td><input name="Textamnt" type="text" value="<?php echo $row['amount'];?>"></td>
			<td><input name="TextDate" type="text" value="<?php echo $row['date'];?>"></td>
			<td><input name="Textuname" type="text" value="<?php echo $row['username'];?>"></td>
			<td><a href="EditSeminar.php?id=<?php echo $row['semId'];?>">Edit</a></td><td><a href="DeleteSeminar.php?id=<?php echo $row['semId'];?>">Delete</a></td>
            <?php } ?>
		</tr>
	</table>
</div>
                
              </td>
            <td>&nbsp;</td>
        </tr>
        
         <tr>
            <td colspan="2" style="background-color: #333333; color: #FFFFFF; font-size: large; font-family: arial, Helvetica, sans-serif;">Product  Details</td>
            <td>&nbsp;</td>
        </tr>
          <tr>
            <td>
                <div>
	<table cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_GridView3" style="border-collapse:collapse;">
		<tr>
			<th scope="col">PrdName</th><th scope="col">prdDesc</th><th scope="col">prdAmount</th><th scope="col">image</th><th scope="col">&nbsp;</th><th scope="col">&nbsp;</th>
		</tr>
        <?php
		$res2=$db->SelectProduct();
		while($row=mysql_fetch_array($res2)){
		 ?><tr>
			<td><input name="Textname" type="text" value="<?php  echo $row['PrdtName']?>"></td>
			<td><textarea name="TextDesc"> <?php  echo $row['PrdtDesc']?></textarea>
			<td><input name="TextAmount" type="text" value="<?php  echo $row['PrdtAmnt']?>"></td>
			<td><img src=""></img></td><td><a href="deleteprdct.php?id=<?php echo $row['prdtId']; ?>">Delete</a></td><td><a href="Editprdct.php?id=<?php echo $row['prdtId']; ?>">Edit</a></td>
		<?php } ?>
        </tr>
	</table>
</div>
                
            </td>
            <td>&nbsp;</td>
        </tr>
         <tr>
            
            <td>&nbsp;</td>
        </tr>
        <tr>
            
            <td>&nbsp;</td>
        </tr>
    </table>

    </div>
    </form>
       </div>
    
</body>
</html>
