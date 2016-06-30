<?php
setcookie("loggedin","val", time() - (86400 * 30), "/");
	header("location:../admin/index.php");
 ?>