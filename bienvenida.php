<?php
//blocea el acceso si no hay un usuario o por la direcicon de la pag
session_start();
if(!isset($_SESSION['usuario'])){
    echo '
        <script>
        alert("Por favor debes iniciar sesion");
        window.location="acceso.php";
        </script>
    ';
   // header("location: acceso.php");
    session_destroy();
    die();
    
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Bienvenida</title>
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="estilos.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
     
        
        
  
    
    </head>
    <body class="fon">
        
        
        <h1>bienvenido</h1>
        <a href="php/cerrar_sesion.php">Cerrar sesion</a>
        
        
        
        
        <div class="container__cards">

        <div class="card">
            <div class="cover">
                <img src="img/pkr.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Cristian Molina</h2>
                <p>Estudiante ITSQMET<br>
                Desarrollo de Software</p>
                <input type="button" value="Leer Más">
            </div>
        </div>

        <div class="card">
            <div class="cover">
                <img src="img/p1.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Lorena Guerra</h2>
                <p>Estudiante ITSQMET<br>
                Desarrollo de Software</p>
                <input type="button" value="Leer Más">
            </div>
        </div>

        

    </div>
        
        
        
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