<?php
$cookie_name = "loggedin";

require("bd.php");

	if (isset($_POST['conectar'])) {
		$usr =  $_POST['user'];
		$pass = $_POST['password'];

		$phash = sha1(sha1(md5($pass)."salt")."pepper");

		$sql = "SELECT * FROM users WHERE user='$usr' AND pass='$phash' ";

		$result = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($result);

			if ($count == 1) {
				$cookie_value = $usr;
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
				header("location: ../admin/indexlog.php");
			}
			else{
				echo "Usuario o Contraseña Incorrecto!!";
			}}

?>