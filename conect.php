<?php

function conectar(){
$host = "localhost";
$user = "root";
$pass = "";
$bd = "cv";
$con=mysqli_connect($host,$user,$pass,$bd) or die("no se pudo conectar con la bd");
//mysqli_select_db($con, $bd);
return $con;

}
?>