
<?php 
    include('./conectar_utd.php');

  $id=$_REQUEST['id'];

  $sel=$conexion->query("SELECT * from textos where id='$id'");

  if ($fila=$sel->fetch_assoc())
  {
  }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Actualizar Texto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="../admin.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
        </div>
    </nav>

       <div class="container">
       <h1 class="h1 text-center">Actualizar el texto</h1>
            <div align="center" class="form-row" >
                
                <form action="textfunc.php" method="post">
               <div>
                   <label >Id: </label>
                   <input class="form-control" type="text" name="id" placeholder="Nombre" value="<?php echo $fila['id']?>" disabled>
               </div>
            
               <div>
                   <label >Texto: </label>
                   <input class="form-control" type="text" name="texto" placeholder="Apellidos" value="<?php echo $fila['texto']?>" required>
               </div>
             

               <div>
                  <input  type="hidden" name="id" value="<?php echo $fila['id']?>">
                  <input class="btn btn-primary" type="submit" name="enviar" value="Guardar">
                  
               </div>
            
                </form>

               
                <!-- <a class="enlace_actualizar" href="menu.php">Menú Principal</a> -->
            </div>
          
       </div>
    </body>
</html>