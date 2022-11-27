<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "gmr";

$conecta = mysqli_connect($servidor, $usuario, $password, $bd);

if($conecta->connect_error){
    die("Error al conectar a la base de datos".$conecta->connect_error);
};


?>