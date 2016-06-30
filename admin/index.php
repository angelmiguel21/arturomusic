<?php
$cookie_name =  "loggedin";
if (isset($_COOKIE[$cookie_name])){
  header("location:indexlog.php");
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	 <link href="css/bootstrap.min.css" rel="stylesheet">
    	 <link rel="icon" href="../images/fav-icon.png">
	     <script type="text/javascript" src="js/jquery.js" ></script>
    	 <script src="js/bootstrap.min.js"></script>
       <script src="../js/youtube.js"></script>
       <script src="../js/main.js"></script>
	<title>Admin || ArturoMusic</title>
</head>
<body>
<nav class="navbar navbar-default" id="nav">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li><a href="descargas.html">Descargas </a></li>
        <li><a href="galeria.html">Galería</a></li>-->

      </ul>
      <form class="navbar-form navbar-right" role="login" action="../conect/login.php" method="post">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Usuario" name="user">
          <input type="password" class="form-control" placeholder="Contraseña" name="password">
        </div>
        <button type="submit" class="btn btn-default" name="conectar">Login</button>
      </form>
  </div><!-- /.container-fluid -->
</nav>

<section>
  <div class="container">
    <div  class="col-sm-12">
          <ul id="results"></ul>
        </div>
  </div>
</section>
</body>
</html>