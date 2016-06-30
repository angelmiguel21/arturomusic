<?php

require("bd.php");

$name  =  $_POST['name'];
$mail =  $_POST['mail'];
$user =  $_POST['user'];
$pass =  $_POST['pass'];

$phash = sha1(sha1(md5($pass)."salt")."pepper");

$sql = "INSERT INTO users (name, mail, user, pass)
	VALUES ('$name', '$mail', '$user', '$phash')";

	$result = mysqli_query($conn, $sql);

 ?>