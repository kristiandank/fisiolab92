<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página web FisioLab</title>
        
        <link rel="stylesheet" href="estilos_1.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        
    </head>
    <body class="bodyfondo">
        <header class="header" id="inicio">
            <img class="icomenu" src="img/icomenu.svg" alt="">
            <nav class="menu-navegacion">
                <a href="./acceso.php">Login</a>
                <a href="#inicio">Inicio</a>
                <a href="#servicio">Servicio</a>
                <a href="#galeria">Portafolio</a>
                <a href="#expertos">Expertos</a>
                <a href="#footer">Contacto</a>
                <a href="./laboratorio.php">Laboratorio Clinico</a>
                <a href="./contac.php">Soporte</a>
                
                </nav>
            <div class="contenedor head">
                <p style="font-size: 1000%"><strong>FisioLab</strong></p>
                <h1>Experiencia, Calidad y Seguridad</h1>
                <p class="copy">Prevenir enfermadad y prolongar una vida digna.</p>
                
            </div>
        </header>  
        <main>
            <section class="services contenedor" id="servicio">
                <h2 class="subtitulo"><strong>Nuestro servicio:</strong></h2>
                <div class="contenedor-servicio">
                    <img src="img/checklist.svg" alt="">
                    <div class="checklist-servicio">
                        <div class="service">
                            <h3 class="n-service"><span class="number">1</span><a href="./laboratorio.html">Laboratorio Clinico</a></h3>
                            <p><label style="color: palevioletred "><strong>EXAMAMENES:</strong></label><br> 
                                SANGRE, HORMONAS<br>
                               <br><label style="color: palevioletred"><strong>BACTERIOLOGIA:</strong></label><br> 
                                ORINA, HECES<br>
                                CULTIVO Y ANTIBIOGRAMA<br>
                                PRUEBAS ESPECIALES<br>
                                ESTUDIO DE MUESTRAS</p>                            
                        </div>
                        <div class="service">
                            <h3 class="n-service"><span class="number">2</span>Fisiterapia</h3>
                            <p><label style="color: palevioletred "><strong>TERAPIA:</strong></label><br>
                                DEPORTIVA, REUMATOLOGICA, TRAUMATOLOGICA<br>
                                PRE/POST QUIRURJICA<br><br>
                                <label style="color: palevioletred "><strong>MASAJES:</strong></label><br>
                                TERAPEUTICOS, RELAJANTES
                              </p>                            
                        </div>
                        <div class="service">
                            <h3 class="n-service"><span class="number">3 </span>Ecografias</h3>
                            <p>- TRANSVAGINAL - OBSTÉTRICO - RENAL <br> - TESTICULAR - PÉLVICO - ABDOMINAL<br> 
                               - TIROIDES - MAMAS     </p>                            
                        </div>
                    </div>
                </div> 
            </section>
            <section class="galery" id="galeria">
                <div class="contenedor">
                    <h2 class="subtitulo"><strong>Galeria:</strong></h2>
                    <div class="contenedor-galeria">
                        <img src="img/uno.jpg" alt="" class="img-galeria">
                        <img src="img/dos.jpg" alt="" class="img-galeria">
                        <img src="img/tres.jpg" alt="" class="img-galeria">
                        <img src="img/cuatro.jpg" alt="" class="img-galeria">
                        <img src="img/cinco.jpg" alt="" class="img-galeria">
                        <img src="img/seis.jpg" alt="" class="img-galeria">
                    </div>                    
                </div>
            </section>
            <section class="imagen-light">
                <img src="img/close.svg" alt="" class="close">
                <img src="" alt="" class="agregar-imagen">
            </section>

            <section class="contenedor" id="expertos">
                <h2 class="subtitulo"><strong>Expertos en:</strong></h2>
                <section class="experts">
                    <div class="cont-expert">
                        <img src="img/Doctor.svg" alt="">
                        <h3 class="n-expert">Experiencia</h3>   
                    </div>
                    <div class="cont-expert">
                        <img src="img/dialogo.svg" alt="">
                        <h3 class="n-expert">Atencion Personalizada</h3>   
                    </div>
                    <div class="cont-expert">
                        <img src="img/Marketing.svg" alt="">
                        <h3 class="n-expert">Precios Accesibles</h3>   
                    </div>
                </section>
            </section>
        </main>
        <footer id="footer">
            <div class="contenedor footer-content">
                <div class="contact-us">
                    <h2 class="brand">Lorena guerra & Cristian Molina</h2>
                    <p> <strong>SOLANDA</strong>:<br>Sector 2,calle Gaspar Esparza y Benedicto Rincon, junto a la escuela "Eduardo Carrion"<br>
                        <strong>MAGDALENA:</strong><br>Calle Caranqui y Maria Duchicela, frente al "Centro de Salud la Magdalena".<br>
                        <strong>TELEFONO:</strong> 0995225612 / 0995675273</p>
                    

                </div>
                <div class="social-media">
                    <a href="https://www.facebook.com/Fisiolab92/" class="social-media-icon">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="./" class="social-media-icon">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                    <a href="https://chat.whatsapp.com/IMtW77SairrEJYEzPEIIN2" class="social-media-icon">
                        <i class='bx bxs-user' ></i>
                    </a>                
                </div>
            </div>    
            <div class="line"></div>
        </footer>
        <script src="js/menu.js"></script>
        <script src="js/lightbox.js"></script>

    </body>
</html>