<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="CJ Chan">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>CJ Chan-Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
	<link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
	<?php
		include '_includes/nav-components.html';  // Works.
	?>
   
   

<div id="MainContant">
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Contact</h1>
        <p>Email: iamcjchan [at] gmail.com</p>
	  </div>
 </div>

    </div> <!-- /container -->

	<?php
		include '_includes/footer.html';  // Works.
	?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#contactNav").addClass( "active" );
		  });
	</script>
  </body>
</html>
