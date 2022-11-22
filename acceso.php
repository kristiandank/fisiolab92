<?php
//mantenter abierta session
session_start();
if(isset($_SESSION['usuario'])){
    header("location: bienvenida.php");
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="estilos_1.css">
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="bodypass">
    
    
<!--botones login-->
        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>
<!--menu-->
    <header class="header4" id="inicio">
            <img class="icomenu" src="img/icomenu.svg" alt="">
            <nav class="menu-navegacion">
                <a href="./acceso.php">Login</a>
                <a href="./index.php#inicio">Inicio</a>
                <a href="./index.php#servicio">Servicio</a>
                <a href="./index.php#galeria">Portafolio</a>
                <a href="./index.php#expertos">Expertos</a>
                <a href="./index.php#footer">Contacto</a>
                <a href="./laboratorio.php">Requisitos para examenes</a>
                <a href="./contac.php">Registro de cita</a>
                
                
            </nav>
            
        </header>

        <script src="js/script.js"></script>
        <!--menu-->
        <script src="js/menu.js"></script>
        <script src="js/lightbox.js"></script>
</body>
</html>

