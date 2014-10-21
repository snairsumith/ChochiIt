<?php
session_start();
?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>

</title><link href="../css/style.css" rel="stylesheet" />
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
				<a href="../chat/samplea.php">
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
           
          

j



    <div></div>
   
       </div>
    
</body>
</html>
