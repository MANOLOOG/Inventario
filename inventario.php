<?php

include 'include/connect.php';
//include 'include/insertar.php';
include 'include/agregar.php';
include 'include/otro.php';
include 'include/pr.php';






  //$que = "DELETE FROM principal WHERE CODIGO > 0";
  //$ejque = $conecta->query($que);


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
          <div class="btn-group mx-1" role="group" aria-label="Basic radio toggle button group">
          <a href="inventario.php">
          <label class="btn btn-outline-primary" for="btnradio1">Actualizar</label>
          </a>
          
        </div>


        <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Añadir
      </button>

          <div class="input-group mb-3 mt-4 ">
          <span class="input-group-text" id="basic-addon1">
          <svg class="bi text-dark" width="20" height="25" fill="currentColor">
              <use xlink:href="library/bootstrap-icons.svg#search"/>
            </svg>
          </span>
          <input type="text" class="form-control " id="search" placeholder="Buscar">
        </div>
      </div>
    </div>

    

  <!-- Modal Añadir -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            <label for="" class="form-label">Ingresa el codigo</label>
            <input type="text" name="code" placeholder="Ej. 123 456 789 A" class="form-control">

            <label for="" class="form-label mt-2">Ingresa el nombre</label>
            <input type="text" name="nomPza" placeholder="Inserta el Nombre" class="form-control">
          
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" name="btnAdd" class="btn btn-primary">Añadir</button>
        </div>
        </form>
      </div>
    </div>
  </div>




  <!-- Modal Insercion -->
  <div class="modal fade" id="insercion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cantidades</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            <label for="" class="form-label">Ingresa la cantidad de Entrada</label>
            <input type="text" name="entrada" class="form-control">

            <label for="" class="form-label">Ingresa la cantidad de Salida</label>
            <input type="text" name="salida" class="form-control">

            <label for="" class="form-label">Ingresa x</label>
            <input type="text" name="n/a" class="form-control">
            
            <label for="" class="form-label">Ingresa x</label>
            <input type="text" name="n/a1" class="form-control">

          </form>
          
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <input type="submit" name="btnIngresar" class="btn btn-primary" value="Insertar">
        </div>
      </div>
    </div>
  </div>



    <div>
        <table name="table" class="table table-striped" id="mytable">
       
            <!--Encabezado-->
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Descripción</th>
              <th scope="col">Existencia inicial</th>
              <th scope="col">Entradas</th>
              <th scope="col">Salidas</th>
              <th scope="col">N/a</th>
              <th scope="col">N/a</th>
              <th scope="col">Existencia final</th>
              <th scope="col">Agregar</th>
            </tr>



            <?php while($row=$ejconsulta->fetch_array()){?>
            <tr>    
              <td><?php echo $row ['CODIGO']; ?></td>
              <td><?php echo $row ['DESCRIPCION']; ?></td>
              <td><?php echo $row ['EXISTENCIA']; ?></td>
              <td><?php echo $row ['ENTRADAS']; ?></td>
              <td><?php echo $row ['SALIDAS']; ?></td>
              <td><?php echo $row ['SOB']; ?></td>
              <td><?php echo $row ['N/A']; ?></td>
              <td><?php echo $row ['EXISTENCIAF']; ?></td>
              <td>
                <div class="btn-group dropend">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insercion">
                    Insertar
                  </button>
                  <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropright</span>
                  </button>
                  <ul class="dropdown-menu">
                    <!-- Dropdown menu links -->

                        <!-- Button eliminar -->
                      <button type="button" class="btn btn-danger mt-2 mx-3" data-bs-toggle="modal" data-bs-target="#drop">
                        Eliminar
                      </button>

                        <!-- Button modificar -->
                        <button type="button" class="btn btn-primary mt-2 mx-3" data-bs-toggle="modal" data-bs-target="#drop">
                        Modificar
                      </button>
                    

                  </ul>
                </div>
              </td>
              <?php }?>
            </tr>
            

          </table>
    </div>




<!-- Modal -->
<div class="modal fade" id="drop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <h2 class="">¿Estás seguro que quieres eliminarlo?</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" name="btnEliminar" class="btn btn-danger">Eliminar</button>
      </div>
      </form>
    </div>
  </div>
</div>



    

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>

    <script>
      // Write on keyup event of keyword input element
      $(document).ready(function(){
      $("#search").keyup(function(){
      _this = this;
      // Show only matching TR, hide rest of them
      $.each($("#mytable tbody tr"), function() {
      if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
      $(this).hide();
      else
      $(this).show();
      });
      });
      });
</script>
</body>
</html>