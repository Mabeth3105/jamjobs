<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="img/iconoJAMJobs.ico" type="image/x-icon">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="styles/materialize.css">
    <!-- Compiled and minified JavaScript -->
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <title>JAMJobs</title>
</head>
<body>
    <div class="contenedor">
    <main>
        <div class="container">
            <section class="section--hero">
                <div class="section--hero__content">
                    <p class="bienve">¡Te damos la bienvenida a tu comunidad profesional!</p>
                    <a href="?pg=login">Buscar empleo ></a>
                    <br><br><br>                       
                </div>
              
                <img src="img/18771 1.svg" class="img01" alt="Imagen de inicio">

            </section>
        </div>

        <section class="section--companyFinder">
                <p class="section--companyFinder__title">Publica tu anuncio de empleo y <br>apoya la economía estudiantil</p>
                <a href="?pg=loginReclu" class="section--companyFinder__content">Publicar empleo</a> 
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="carousel center-align">
                            <h2>Galería</h2>
                            <div class="carousel-item">
                                <img src="img/imagen1.jpg" alt="">
                            </div>

                            <div class="carousel-item">
                                <img src="img/imagen2.jpg" alt="">
                            </div>

                            <div class="carousel-item">
                                <img src="img/imagen3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        Modal secundario
        <div id="assistant--true" class="modal">
            <div class="modal-content">
              <h2>Asistente de voz</h2>
              <p>Muy bien, yo te ayudaré en lo que necesites.</p>
              <p>¿Qué deseas hacer?</p>
              <p>Para Crear cuenta di: Crear cuenta</p>
              <p>Para Iniciar sesión di: Iniciar sesión</p>
              <p><span class="span--assistant">Nota:</span>Recuerda que puedes decir lo que quieres hacer o seleccionar la opción.</p>
              <div class="modal__centrar--opcion">
                <a href="#" class="modal--opcion">Crear cuenta</a>
                <a href="#" class="modal--opcion">Iniciar sesión</a>
              </div>
            </div>
        </div>

        Modal principal
        <div id="assistant" class="modal">
            <div class="modal-content">
              <h2>Asistente de voz</h2>
              <p>Bienvenido a JAMJobs trabajo para todos, yo soy tu asistente personal. Puedes elegir si quieres mi ayuda o no.</p>
              <p>Di <span class="span--assistant">Ayuda</span> en caso de que me quieras usar o di <span class="span--assistant">No</span> en caso de que no me quieras usar. También puedes seleccionar las opciones en pantalla.</p>
              <div class="modal__centrar--opcion">
                <button data-target="assistant--true" id="btnHelp" class="modal--opcion modal-trigger">Ayuda</button>
                <button id="" class="modal--opcion">No</button>
              </div>
            </div>
        </div>

        <button data-target="assistant" class="btn modal-trigger" id="btn-assistant">Asistente<i class="fas fa-hands-helping"></i></button>
        -->
    </main>
    </div>
    
    <footer class="footer">
        <div class="container">
            <img class="logo" src="img/LogoJAMJobs.svg" alt="Logo de JAMJobs del footer">
        </div>
    </footer>
</body>
</html>

<script src="https://kit.fontawesome.com/28633d0b0c.js" crossorigin="anonymous"></script>
<script src="js/materialize.js"></script>
<script>
    /*
    let modal1 = document.getElementById("btnHelp");
    modal1.addEventListener("click",closeModal);

    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
    }); 

  function closeModal(){
    let elem1 = document.getElementById("assistant");
    let instance1 = M.Modal.getInstance(elem1);
    instance1.close();
    console.log("");
  }

  window.onload = function(){
    let elem1 = document.getElementById("assistant");
    let instance1 = M.Modal.getInstance(elem1);
    instance1.open();
  }*/

  //Carousel de imagenes
  document.addEventListener('DOMContentLoaded', () =>{
    const elemCarousel = document.querySelectorAll(".carousel");

    M.Carousel.init(elemCarousel, {
        duration: 150,
        dist: -80,
        shift: 5,
        padding: 5,
        numVisible: 3,
        indicators: true
    });
  });
</script>