<?php
$servername = "localhost";
$database = "heroisnacozinha";
$username = "root";
$password = "";
$con = mysqli_connect($servername,$username,$password,$database)
or die("Erro: ". mysqli_error($con));
mysqli_set_charset($con,'utf8');

?>
