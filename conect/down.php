<?php
require("bd.php");

$nivel = $_GET['cmd'];

if  ($nivel=="acorde"){

$result = mysqli_query($conn,"SELECT * FROM downloads WHERE cat= 'Acordes'");
WHILE ($ROW = mysqli_FETCH_array($result)){
	echo utf8_encode('<p><a target="_blank" href="'.$ROW['url'].'"> - '.$ROW['name'].'</a></p>') ;
}}

elseif  ($nivel=="tablatura"){

$result = mysqli_query($conn,"SELECT * FROM downloads WHERE cat= 'Tab '");
WHILE ($ROW = mysqli_FETCH_array($result)){
	echo utf8_encode('<p><a target="_blank" href="'.$ROW['url'].'"> - '.$ROW['name'].'</a></p>') ;
}}

elseif  ($nivel=="guitarpro"){

$result = mysqli_query($conn,"SELECT * FROM downloads WHERE cat= 'Guitar Pro'");
WHILE ($ROW = mysqli_FETCH_array($result)){
	echo utf8_encode('<p><a target="_blank" href="'.$ROW['url'].'"> - '.$ROW['name'].'</a></p>');
}}

elseif  ($nivel=="cover"){

$result = mysqli_query($conn,"SELECT * FROM downloads WHERE cat= 'Cover'");
WHILE ($ROW = mysqli_FETCH_array($result)){
	echo utf8_encode('<p><a target="_blank" href="'.$ROW['url'].'"> - '.$ROW['name'].'</a></p>');
}}

elseif  ($nivel=="software"){

$result = mysqli_query($conn,"SELECT * FROM downloads WHERE cat= 'Software'");
WHILE ($ROW = mysqli_FETCH_array($result)){
	echo utf8_encode('<p><a target="_blank" href="'.$ROW['url'].'"> - '.$ROW['name'].'</a></p>');
}}


elseif  ($nivel=="acorde_admin"){

$result = mysqli_query($conn,"SELECT * FROM downloads WHERE cat= 'Acordes'");
WHILE ($ROW = mysqli_FETCH_array($result)){
	echo utf8_encode('<p><a target="" href=""> - '.$ROW['name'].'</a></p>') ;
}}

elseif  ($nivel=="tablatura_admin"){

$result = mysqli_query($conn,"SELECT * FROM downloads WHERE cat= 'Tab '");
WHILE ($ROW = mysqli_FETCH_array($result)){
	echo utf8_encode('<p><a target="" href=""> - '.$ROW['name'].'</a></p>') ;
}}

elseif  ($nivel=="guitarpro_admin"){

$result = mysqli_query($conn,"SELECT * FROM downloads WHERE cat= 'Guitar Pro'");
WHILE ($ROW = mysqli_FETCH_array($result)){
	echo utf8_encode('<p><a target="" href=""> - '.$ROW['name'].'</a></p>');
}}

elseif  ($nivel=="cover_admin"){

$result = mysqli_query($conn,"SELECT * FROM downloads WHERE cat= 'Cover'");
WHILE ($ROW = mysqli_FETCH_array($result)){
	echo utf8_encode('<p><a target="_blank" href="'.$ROW['url'].'"> - '.$ROW['name'].'</a></p>');
}}

elseif  ($nivel=="software_admin"){

$result = mysqli_query($conn,"SELECT * FROM downloads WHERE cat= 'Software'");
WHILE ($ROW = mysqli_FETCH_array($result)){
	echo utf8_encode('<p><a target="_blank" href="'.$ROW['url'].'"> - '.$ROW['name'].'</a></p>');
}}
 ?>