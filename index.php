
<!DOCTYPE html>
<html lang="es">
<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>Arturo Music | Covers | Karaoke | Audio/Video Studio</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/main.css" rel="stylesheet">
	    <link href="css/animate.css" rel="stylesheet">
	    <link href="css/responsive.css" rel="stylesheet">
	    <link href="css/prettyPhoto.css" rel="stylesheet">
	    <link rel="stylesheet" href="css/jquery.bxslider.css">
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	    <script type="text/javascript" src="js/smoothscroll.js"></script>
	    <script type="text/javascript" src="js/jquery.parallax.js"></script>
	    <script type="text/javascript" src="js/coundown-timer.js"></script>
	    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
	    <script type="text/javascript" src="js/jquery.nav.js"></script>
	    <script type="text/javascript" src="js/main.js"></script>
	    <script type="text/javascript" src="js/youtube.js"></script>
	    <script src="js/jquery.prettyPhoto.js"></script>
	    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	    <script src="js/jquery.onvisible.min.js"></script>
	    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
	    <script src="https://apis.google.com/js/platform.js"></script>

	    <script type="text/javascript">
        		$(window).load(function() {
			// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");;
		});
        	    </script>

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
	    <link rel="shortcut icon" href="images/fav-icon.png">
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header" role="banner">
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="https://twitter.com/arturomusic_tw" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="https://www.facebook.com/Arturo-Music-1615376148715899" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://www.youtube.com/user/prueba1105" target="_blank"><i class="fa fa-youtube"></i></a>
					</div> <!-- social -->
					<!--<div class="pull-right">
						<p id="login" class="conectar">Login</p>
						<form action="conect/login.php" class="form-inline" id="sesion" method="post">
						<input class="form-control" type="text" id="user" name="user" placeholder="user">
						<input class="form-control" type="password" id="password" name="password" placeholder="password">
						<input class="btn btn-default btn-lg" id="login" type="submit" value="conectar" name="conectar">
						</form>
					</div>  login -->
				</div> <!-- header-top -->
		        <div class="row">
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.php">
		                	<img class="img-responsive" src="images/logo_head.png" alt="logo">
		                </a>
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">
		                    <li class="scroll active"><a href="#home">Home</a></li>
		                    <li class="scroll"><a href="#explore">Videos</a></li>
		                    <li class="scroll"><a href="#event">Galería</a></li>
		                    <li class="scroll"><a href="#about">Records</a></li>
		                    <li class="scroll"><a href="#sponsor">Descargas</a></li>
		                    <!--<li class="scroll"><a href="#twitter">Twitter</a></li>-->
		                    <li class="scroll"><a href="#contact">Contacto</a></li>
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>
    </header>
    <!--/#header-->
<!-- Loading --> <div class="se-pre-con"></div>

<?php require "sections/home.php"; ?>
	<!--/#home-->
<?php require "sections/videos.php" ?>
	<!--/#explore-->
<?php require "sections/galeria.php" ?>
	<!--/#event-->
<?php require "sections/records.php" ?>
	<!--/#about-->
<?php require "sections/descargas.php" ?>
	<!--/#sponsor-->
<?php //require "sections/twitter.php" ?>
	<!--/#twitter-feed-->
<?php require "sections/contacto.php" ?>
	<!--/#contact-->
<?php require "sections/footer.php" ?>
    <!--/#footer-->

</body>


</html>