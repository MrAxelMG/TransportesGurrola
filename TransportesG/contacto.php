
<?php

if (isset($_POST['submit'])) {
    $nombre = $_POST['name'];
    $correo = $_POST['mail'];
    $mensaje = $_POST['msj'];
    $phone = $_POST['phone'];


    $enviar_a = 'alejandrogurrol@gmail.com';
    $asunto = 'Correo enviado desde mi página Web';
    $mensaje_enviar = "De: $nombre \n";
    $mensaje_enviar .= "Correo: $correo \n";
    $mensaje_enviar .= "Mensaje: " . $mensaje;
    $mensaje_enviar .= "Telefono: " . $phone;
    mail($enviar_a,$asunto, $mensaje_enviar);
    
      // echo "<script>alert('Mensaje enviado!');</script>"; 

  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Transportes Gurrola</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
  </head>

<body>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                        <img src="assets/img/gurrola_1.png" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                        <li class="scroll-to-section"><a href="index.html" class="active">Inicio</a></li>
                        <li class="scroll-to-section"><a href="index.html">Servicios</a></li>
                        <li class="scroll-to-section"><a href="about-us.html">Nosotros</a></li>
                    
                    
                        <li><a href="contacto.php">Contactanos</a></li> 
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Contacto</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Main Banner Area End ***** -->

  <section class="map">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.6950261021498!2d-104.6315731!3d24.041817400000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb7b71a4cb333%3A0x9299d58a3043c543!2sBlvd.%20De%20Las%20Rosas%20314%2C%20Jardines%20de%20Durango%2C%2035111%20Durango%2C%20Dgo.!5e0!3m2!1ses-419!2smx!4v1675180964054!5m2!1ses-419!2smx"  width="100%" height="450px" frameborder="0" style="border:0; border-radius: 5px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.78997548554!2d144.9805125252687!3d-37.84132841005892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6681f3e9cb7e1%3A0x9d52778f56cab5a8!2sFawkner%20Park!5e1!3m2!1sen!2sth!4v1648201596364!5m2!1sen!2sth"></iframe> -->
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <div class="row">
            <div class="col-lg-4">
              <div class="info-item">
                <i class="fa fa-envelope"></i>
                <h4>Email</h4>
                <a href="#">gurrolatransportes@gmail.com</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item">
                <i class="fa fa-phone"></i>
                <h4>Numero</h4>
                <a href="#"> 618 185 59 75

                  ​</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item">
                <i class="fa fa-clock"></i>
                <h4>HORARIO</h4>
                <!-- <a href="#">s -->

                  Lunes - Viernes : 9:00 am a 2:00 pm,  4:00 pm a 8:00 pm. Sabado - Domingos 10:00 am - 2:00 pm. </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Contacto</h6>
            <h4>Sientete libre de compartir un mensaje con nosotros</h4>
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <form id="contact" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Tu nombre" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="phone" name="phone" id="phone" placeholder="Telefono" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="mail" id="mail" pattern="[^ @]*@[^ @]*" placeholder="Tu correo" required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="subject" name="subject" id="subject" placeholder="gurrolatransportes@gmail.com" autocomplete="on" disabled >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="msj" id="msj" placeholder="Tu mensaje"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" name="submit" class="orange-button" onclick="confirmar();">Enviar Mensaje</button>
                <script>
                                function confirmar(){
                              swal('Mensaje Enviado', 'Te atenderemos pronto', 'success');
                              
                                }
                              </script>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="partners">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/img/LALAp.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/img/Danone.webp" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/img/logo-blue.webp" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/img/chedraui.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/img/pilgrims-vector-logo.webp" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/img/tyson.webp" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright© 2022 Transportes Gurrola ©
          
          <!-- <br>Designed by <a title="CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p> -->
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      var interleaveOffset = 0.5;

      var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        on: {
          progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              var slideProgress = swiper.slides[i].progress;
              var innerOffset = swiper.width * interleaveOffset;
              var innerTranslate = slideProgress * innerOffset;
              swiper.slides[i].querySelector(".slide-inner").style.transform =
                "translate3d(" + innerTranslate + "px, 0, 0)";
            }      
          },
          touchStart: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = "";
            }
          },
          setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = speed + "ms";
              swiper.slides[i].querySelector(".slide-inner").style.transition =
                speed + "ms";
            }
          }
        }
      };

      var swiper = new Swiper(".swiper-container", swiperOptions);
    </script>

  </body>
</html>