<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/style.css" rel="stylesheet" />
    <style type="text/css">
    .auto-style1 {
        width: 100%;
    }
	.btn
{
	color: #FFF;
	background-color: #C30;
	height: 45px;
	width: 110px;	
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
    
  <script>
      window.open = function () { };
      window.print = function () { };
      // Support hover state for mobile.
      if (false) {
          window.ontouchstart = function () { };
      }

      function __linkClick(e) {
          parent.window.postMessage(this.href, '*');
      };

      function __bindToLinks() {
          var __links = document.querySelectorAll('a');
          for (var i = 0, l = __links.length; i < l; i++) {
              if (__links[i].getAttribute('data-t') == '_blank') {
                  __links[i].addEventListener('click', __linkClick, false);
              }
          }
      }
  </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage('resize', "*");
        }
        __bindToLinks();
  </script>
<div id="main" class="container">
           
          
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTA0NDA2NjkyNg9kFgJmD2QWAgIDD2QWAgIBD2QWCAIBDw8WAh4EVGV4dAUBMmRkAgMPDxYCHwAFATFkZAIFDw8WAh8ABQEyZGQCBw8PFgIfAAUBMmRkZAH2d0OEux+CIbEHsh8TwcO1/3HKFnm0oX8CKjcGGY8Z" /> 

<form action="insertseminar.php" method="post" enctype="multipart/form-data">

<table width="513">
  <tr>
    <td width="176">Seminar Tittles</td>
    <td width="321"><input name="stittle" type="text"/></td>
  </tr>
  <tr>
    <td>Seminar Description</td>
    <td><input name="sdescription" type="text"/></td>
  </tr>
  <tr>
    <td>Seminar Technologies    </td>
    <td><input name="stechnologies" type="text"/></td>
  </tr>
  <tr>
    <td>Amount</td>
    <td><input name="amt" type="text"/></td>
  </tr>
  <tr>
    <td>Full document</td>
    <td><label for="doc"></label>
      <input type="file" name="doc" id="doc" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="save" type="submit" class="btn" value="save" /></td>
  </tr>
</table>
</form>

</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="7A929C34" />
</div>
    <div></div>
  
       </div>
    
</body>
</html>