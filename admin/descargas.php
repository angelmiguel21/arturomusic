<?php
$cookie_name =  "loggedin";
if (isset($_COOKIE[$cookie_name])){
  $cookie_value = $_COOKIE[$cookie_name];
}
else {
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	 <link href="css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="css/main.css">
       <link rel="icon" href="../images/fav-icon.png">
	<script type="text/javascript"src="js/jquery.js" ></script>
    	  <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
	<title>Admin</title>
</head>
<body>
<?php
require("nav.php");
 ?>

<section id="form">
<br>
	<div class="container">
              <form class="form form-inline col-sm-offset-3" action="" method="post" id="formreg">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nombre" name="name" id="name">
                  <select type="text" class="form-control" placeholder="Categoria" name="cat" id="cat" >
                    <option value="">Seleccione</option>
                    <option value="Acordes">Acordes</option>
                    <option value="Cover">Cover</option>
                    <option value="Guitar Pro">Guitar Pro</option>
                    <option value="Tab">Tabs</option>
                    <option value="Software">Software</option>
                  </select>
                  <input type="text" class="form-control" placeholder="Url" name="url" id="url">
                </div>
                <button type="submit" class="btn btn-default" id="submit">Agregar</button>
              </form>
	</div>
  <br>
  </section>
<section id="lista">
<br>
  <div class="container">
    <div class="panel-group col-sm-6 col-sm-offset-3" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title" align="center">
                  <a data-toggle="collapse" data-parent="#accordion" href="#list1">
                  Covers</a>
                </h4>
              </div>
              <div id="list1" class="panel-collapse collapse">
                <div class="panel-body mypanel" id="cover"></div>
              </div>
            </div><!--Panel cover -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title" align="center">
                  <a data-toggle="collapse" data-parent="#accordion" href="#list2">
                  Acordes</a>
                </h4>
              </div>
              <div id="list2" class="panel-collapse collapse">
                <div class="panel-body mypanel" id="acorde"></div>
              </div>
            </div> <!--Panel acorde -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title" align="center">
                  <a data-toggle="collapse" data-parent="#accordion" href="#list3">
                  GuitarPro</a>
                </h4>
              </div>
              <div id="list3" class="panel-collapse collapse">
                <div class="panel-body mypanel" id="guitarpro"></div>
              </div>
            </div> <!--Panel guitarpro -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title" align="center">
                  <a data-toggle="collapse" data-parent="#accordion" href="#list4">
                  Tablaturas</a>
                </h4>
              </div>
              <div id="list4" class="panel-collapse collapse">
                <div class="panel-body mypanel" id="tablatura"></div>
              </div>
            </div><!--Panel tablatura -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title" align="center">
                  <a data-toggle="collapse" data-parent="#accordion" href="#list5">
                  Software</a>
                </h4>
              </div>
              <div id="list5" class="panel-collapse collapse">
                <div class="panel-body mypanel" id="software"></div>
              </div>
            </div><!--Panel software -->

          </div>

<br>
  </div>
</section>
</body>
</html>