<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$base = 'verao-2019';

$banco = new mysqli($host, $user, $pass, $base);

if (mysqli_connect_errno()) {
	exit("Não foi possível conectar no banco de dados!");
}



?>