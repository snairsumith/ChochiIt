<?php
session_start();
echo "haiii".$_SESSION['uname'];

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/loose.dtd" >

<html>
<head>
<title>Sample Chat Application</title>
<link href="../css/style.css" rel="stylesheet" />
    <style type="text/css">
    .auto-style1 {
        width: 100%;
    }
    .auto-style2 {
        height: 23px;
    }
        .auto-style3 {
            width: 450px;
            height: 200px;
        }
    </style>
     <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    

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
            <?php if($_SESSION['catid']=='1'){ ?>
				<a href="ProjectDetails.php">
					<i class="fa fa-gift"></i>
					<strong>Add Project</strong>
					<small>sweet home</small>
				</a>
                <?php }
				else if($_SESSION['catid']=='2'){
					
				?>
                <a href="prdt.php">
					<i class="fa fa-gift"></i>
					<strong>Add Product</strong>
					<small>sweet home</small>
				</a>
                <?php }
				else if($_SESSION['catid']=='3'){
					
				?>
                
                
                <a href="seminar.php">
					<i class="fa fa-gift"></i>
					<strong>Add Seminar</strong>
					<small>sweet home</small>
				</a>
                 <?php }
								
				?>
			</li>
			<li>
				<a href="Chatlist.php">
					<i class="fa fa-envelope-o"></i>
					<strong>Chat With User</strong>
					<small>drop a line</small>
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

<ul>
<?php

include("../Admin/admin.php");
$db=new admin;
$res=$db->selectUserUname();
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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chat.js"></script>

</body>
</html>