<?php

include 'connect.php';

if(isset($_POST['btnAdd'])){
    $cd = $_POST['code'];
    $pza = $_POST['nomPza'];
  
    $qu = "INSERT INTO `principal`(`CODIGO`, `DESCRIPCION`, `EXISTENCIA`, `ENTRADAS`, `SALIDAS`, `SOBRANTE`, `N/A`, `EXISTENCIA FINAL`) VALUES ('$cd','$pza','0', '0', '0', '0', '0', '0')";
    $ejqu = $conecta->query($qu);
  }



?>