<?php
include("conect.php");

$con=conectar();

$email=$_POST["email"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$telefono=$_POST["telefono"];
$ciudad=$_POST["ciudad"];
$codigo=$_POST["codigo"];


$insertar ="INSERT INTO datos(email, nombre, apellido, telefono, ciudad, codigo) VALUES(
    '$email',
    '$nombre',
    '$apellido',
    '$telefono',
    '$ciudad',
    '$codigo')";
    
    
    $query=mysqli_query($con, $insertar);

    if($query){
        header('location:index.php');
        exit();
    }else{

    }


?>