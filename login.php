<?php

include 'include/connect.php';

if(isset($_POST['btnLogin'])){
    $user = $_POST['usuario'];
    $pass = $_POST['contra'];

    $consul = "SELECT * FROM usuarios WHERE nombre = '$user' and  = '$pass'";
    $ejc = $conecta->query($consul);

    if($ejqu>0){
        header("location:index.php");
    }
    else{
        header("location:login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>

    <title>GMR | Inicio de Sesión</title>
</head>
<body>


    
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid align-items-center justify-content-center">
          <span class="navbar-brand mb-3 h1">Graciela Mireles Robles</span>

        </div>
      </nav>

    <div class="row">
        <div class="col-sm-6 col-md-12 col-lg-12">
            <div class="container col-lg-6 position-absolute top-50 start-50 translate-middle h-75">
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" class="form-control p-4">

                    <label for="" class="h4 mb-3">Usuario</label>
                    <div class="input-group mb-3">
                        <input type="text"name="usuario" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Usuario" id="usuario">
                    </div>
                    
                    <label for="" class="h4 mb-3">Contraseña</label>
                    <div class="input-group mb-3">
                        <input type="password" name="contra" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Contraseña" id="password">
                    </div>

                    <div>
                        <input type="button" value="Iniciar Sesion" id="boton" onclick="login();">
                        

                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="js/validar.js"></script>
</body>
</html>