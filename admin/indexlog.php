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
    	<link rel="icon" href="../images/fav-icon.png">
	    <script type="text/javascript" src="js/jquery.js" ></script>
    	<script src="js/bootstrap.min.js"></script>
      <script src="../js/youtube.js"></script>
      <script src="../js/main.js"></script>
	<title>Admin || ArturoMusic</title>
</head>
<body>
<?php
require("nav.php");
 ?>

<section>
	<div class="container">
    <div  class="col-sm-12">
          <ul id="results"></ul>
        </div>
	</div>
</section>
</body>
</html>