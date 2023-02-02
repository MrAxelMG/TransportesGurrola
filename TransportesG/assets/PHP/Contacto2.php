<?php

if (isset($_POST['submit'])) {
    $nombre = $_POST['name'];
    $correo = $_POST['mail'];
    $mensaje = $_POST['msj'];

    $enviar_a = 'jesyjazel7@yahoo.com.mx';
    $asunto = 'Correo enviado desde mi página Web';
    $mensaje_enviar = "De: $nombre \n";
    $mensaje_enviar .= "Correo: $correo \n";
    $mensaje_enviar .= "Mensaje: " . $mensaje;

    mail($enviar_a, $asunto, $mensaje_enviar);
    // echo "<script>alert('Mensaje enviado!');</script>"; 
    
  
  }
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <!--<link rel="icon" href="../Contacto/favicon.ico" type="image/png">-->
    <link rel="icon" href="/logo1.png" type="image/png" />
    <link rel="stylesheet" href="Contacto2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://file.myfontastic.com/L5BeFP7iJsBgSvvxoKMcs9/icons.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="/assets/fonts/fonts.css"> -->
  </head>
  <title>Contacto</title>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        
        <div class="container">
        <a class="navbar-brand" href="/index.html">
                <img src="/logo1.png" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy"> Licoreria Herrera
            </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/index.html">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
             
              
              <li class="nav-item">
                <a class="nav-link" href="/assets/Productos/startbootstrap-shop-homepage-gh-pages/productos.html">Productos</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="/assets/Login/login.html">Login</a>
              </li> -->
              <li class="list-inline-item">
                        <a href="tel:526182688406" class="icon-telephone" class="btn btn-outline-white btn-rounded"></a>
                    </li>
            </ul>
          </div>
        </div>
      </nav>


    <section class="my-5">

        <!-- Section heading -->
        <!-- Section description -->
        
        
        <h2 class="h1-responsive font-weight-bold text-center my-5">Contacto</h2>
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 mb-lg-0 mb-4">

                <!-- Form with header -->
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                    <div class="card">
                        <div class="card-body">
                            <!-- Header -->
                            <div class="form-header blue accent-1">
                                <h3 class="mt-2"><i class="fas fa-envelope"></i> Escribenos:</h3>
                            </div>
                            <p class="dark-grey-text">Mejorando día con día para darte un mejor servicio.</p>
                            <!-- Body -->
                            <div class="md-form">
                                <i class="fas fa-user prefix grey-text"></i>
                                <label for="form-name">Tu nombre</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Escribe tu nombre">
                            </div>
                            <div class="md-form">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <label for="form-email">Tu email</label>
                                <!-- <input type="text" id="form-email" class="form-control"> -->
                                <input class="form-control" type="email" name="mail" id="mail"
                                    placeholder="Ingresa tu Email" require>
                            </div>

                            <div class="md-form">
                                <i class="fas fa-pencil-alt prefix grey-text"></i>
                                <label for="form-text">Envia un Mensaje O Sugerencia</label>
                                <textarea name="msj" id="msj" name="msj" class="form-control md-textarea" rows="3"
                                    placeholder="Escribe una sugerencia o mensaje para ayudarte."></textarea>
                                <!-- <textarea name="msj" id="msj" name="msj" placeholder="Mensaje"></textarea>-->
                            </div>
                            <div class="text-center">
                                <!-- <button class="btn btn-light-blue">Submit</button> -->
                                <!-- <button type="submit" class="btn btn-light-blue"submit">Enviar Mail</button> -->
                                <button type="submit" class="btn btn-light-blue" name="submit" onclick="confirmar();">Enviar Mail</button>
                              
                              <script>
                                function confirmar(){
                              swal('Mensaje Enviado', 'Te atenderemos pronto', 'success');
                              
                                }
                              </script>


                              
                            </div>
                        </div>
                    </div>
                </form>
          
                <!-- Form with header -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7">

                <!--Google map-->
                <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.6085792868703!2d-105.4240029845366!3d25.04735424390898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8697680e35d89039%3A0x52d7ec9b28009ca!2sLicoreria%20Herrera&#39;s!5e0!3m2!1ses-419!2smx!4v1596853003016!5m2!1ses-419!2smx"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
                <!-- Buttons-->

                <!-- Grid column -->

            </div>
            <!-- Grid row -->

    </section>
    <!-- Section: Contact v.1 -->
</body>

</html>