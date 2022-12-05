<?php

include 'include/connect.php';

if(isset($_POST['btnIngresar'])){

    $input = $_POST['entrada'];
    $output = $_POST['salida'];
    $otro = $_POST['n/a'];
    $otro1 = $_POST['n/a1'];

    $query = "UPDATE principal SET SOBRANTE = '5' WHERE CODIGO = ;"
   
}
?>