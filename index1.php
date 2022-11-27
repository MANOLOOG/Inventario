<?php

include 'include/connect.php';

$consulta = "SELECT * FROM principal";
$ejconsulta = $conecta->query($consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Inventario</title>

</head>
<body>

    <div class="container">
        <div>
            <div class="headings">
                <h2>Inventario</h2>
                <h3>Graciela Mireles Robles</h3>
              </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
          <h1></h1>
        </div>
    </div>

    <div>
        <table name="table" class="table table-striped">
       
            <!--Encabezado-->
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Descripción</th>
            </tr>



            <?php while($row=$ejconsulta->fetch_array()){?>
            <tr>    
              <td><?php echo $row ['CODIGO']; ?></td>
              <td><?php echo $row ['DESCRIPCION']; ?></td>
            </tr>
            <?php }?>


          </table>
    </div>




    

    <script src="js/bootstrap.min.js"></script>
</body>
</html>