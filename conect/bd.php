<?php
$srv = "localhost";
$usr =  "arturomu_artumus" ;//"arturomu_artumus";
$pss = "Steelseries2016." ;//"Steelseries2016.";
$db = "arturomu_armusic" ; //"arturomu_armusic";

$conn = mysqli_connect($srv,$usr,$pss,$db);
	if (!$conn){
		die("Conexion fallida: " .mysqli_connect_error());
	}
 ?>