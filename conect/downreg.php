<?php
require("bd.php");

$name  =  $_POST['name'];
$cat =  $_POST['cat'];
$url =  $_POST['url'];

$sql = "INSERT INTO downloads (name, cat, url)
	VALUES ('$name', '$cat', '$url')";

	$result = mysqli_query($conn, $sql);

 ?>