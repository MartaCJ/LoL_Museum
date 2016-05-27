<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="img/Tray_16.png">

		<title>LoL Museum</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
		<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

		<!-- Custom styles for this template -->
		<link href="css/dashboard.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
		<script src="js/ie-emulation-modes-warning.js"></script>-->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		
		<!--Estilos propios-->
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/style.css">
		
	</head>

	<body>

	<?php
		//with the function $_SERVER we assign at the variable location the route where we are now
		$location= $_SERVER['SCRIPT_NAME'];
		$location=explode("/", $location);
		$num=count($location);

		//echo $location[$num-1];
		//with this functions, the color of the sections of the menu change depending on where we are
		if ($location[$num-1]=="index.php"){ 
			echo '<script type="text/javascript">
					$(document).ready(function () {
						$(".navbar-inverse .navbar-nav > li > a").removeClass("active"); 
						$("#index").toggleClass("active");
					});
				</script>';
		}
		if ($location[$num-1]=="personajes.php"){ 
			echo '<script type="text/javascript">
					$(document).ready(function () {
						$(".navbar-inverse .navbar-nav > li > a").removeClass("active"); 
						$("#personajes").toggleClass("active");
					});
				</script>';
		}
		if ($location[$num-1]=="historia.php"){ 
			echo '<script type="text/javascript">
					$(document).ready(function () {
						$(".navbar-inverse .navbar-nav > li > a").removeClass("active"); 
						$("#historia").toggleClass("active");
					});
				</script>';
		}
		if ($location[$num-1]=="logins.php"){ 
			echo '<script type="text/javascript">
					$(document).ready(function () {
						$(".navbar-inverse .navbar-nav > li > a").removeClass("active"); 
						$("#logins").toggleClass("active");
					});
				</script>';
		}
		if ($location[$num-1]=="trivia3.php"){ 
			echo '<script type="text/javascript">
					$(document).ready(function () {
						$(".navbar-inverse .navbar-nav > li > a").removeClass("active"); 
						$("#trivia").toggleClass("active");
					});
				</script>';
		}
		if ($location[$num-1]=="about.php"){ 
			echo '<script type="text/javascript">
					$(document).ready(function () {
						$(".navbar-inverse .navbar-nav > li > a").removeClass("active"); 
						$("#about").toggleClass("active");
					});
				</script>';
		}


		?>






	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php">LoL Museum</a>

	      <?php 
	      	//JoannaJenkins
	      	if(!empty($_SESSION["summoner_name"])){
		      	//if($_SESSION["summoner_name"] != $_SESSION["summoner_name"]){
		      		echo "<p class='summoner'>Bienvenido <a href='http://www.lolking.net/summoner/euw/".$_SESSION['id']."' target='_blank'>".$_SESSION["summoner_name"]."</a></p>";
	      		//}

	      	}
	       ?>
	    </div>
	

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">
        <li id="index"><a href="index.php">Index <span class="sr-only">(current)</span></a></li>
        <li id="personajes"><a href="personajes.php">Personajes</a></li>
        <li id="historia"><a href="historia.php">Historia</a></li>
		<li id="logins"><a href="logins.php">LoginScreens</a></li>
		<li id="trivia"><a href="trivia3.php">Trivia</a></li>
		<li id="about"><a href="about.php">About</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>