<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" href="estilos_1.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    
    <body class="bodyfondo1">
        <header class="header3" id="inicio">
            <img class="icomenu" src="img/icomenu.svg" alt="">
            <nav class="menu-navegacion">
                <a href="./index.php">Inicio</a>
                <a href="./index.php#servicio">Servicio</a>
                <a href="#footer">Contacto</a>
                <a href="./index.php#galeria">Portafolio</a>
                <a href="./laboratorio.php">Requisitos Examenes</a>
                
            </nav>
            <div class="contenedor head">
                <p style="font-size: 1000%"><strong>CONTACTANOS</strong></p>
                <h1>Experiencia, Calidad y Seguridad</h1>
                <p class="copy">Prevenir enfermadad y prolongar una vida digna.</p>
                
            </div>
        </header>  
        
        
        <div class="container" align="center">
        <h1>Ingresa tus Datos personales</h1>
        <form>
            <table>


                <tr>
                    <td>
                        <label>Cedula</label>
                    </td>
                    <td>
                        <input type ="text" id="cc" placeholder="Ingrese CI/DNI" required=""/> 
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Nombre</label>
                    </td>
                    <td>
                        <input type ="text" id="nom" placeholder="Ingrese Nombre" required=""/> 
                    </td>
                </tr>



                <tr>
                    <td>
                        <label>Apellido</label>
                    </td>
                    <td>
                        <input type ="text" id="ape" placeholder="Ingrese Apellido" required=""/> 
                    </td>
                </tr>



                <tr>
                    <td>
                        <label>Edad</label>
                    </td>
                    <td>
                        <input type ="text" id="edad" placeholder="Ingrese Edad" required=""/> 
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Correo</label>
                    </td>
                    <td>
                        <input type ="email" id="correo" placeholder="Ingrese correo" required=""/> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Contacto:</label>
                    </td>
                    <td id="contactos">
                        <input type ="text" id="contacto0" required=""/> 
                        <button type ="button" onclick="addContacto()">Agregar contacto</button>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>Descripción</label>
                    </td>
                    <td>
                        <input type ="text" id="descripcion" placeholder="Descripción" required=""/> 
                    </td>
                </tr>

                <tr>
                    
                    <td>
                    </td>

                    <td>
                        <button type="button" onclick="capturarD()" class="btn btn-success" >Enviar</button>
                    
                    </td>
                </tr>

            </table>
        </form>
</div>
        <div id="respuesta"></div>
        
        <script>

            function capturarD() {
                var cedula = document.getElementById('cc').value;
                var nombres = document.getElementById('nom').value;
                var apellidos = document.getElementById('ape').value;
                var edad = document.getElementById('edad').value;
                var correo = document.getElementById('correo').value;
                var correo = document.getElementById('descripcion').value;
                var cont0 = "";

                //alert(cedula + " " + nombres + " " + apellidos + " " + edad + " " + correo);
                for (var i = 0; i < contIdContacto; i++) {
                    cont0 += "<h2>";
                  

                    cont0 += document.getElementById('contacto' + i).value;
                    cont0 += "</h2>";
                    
                  
                }

                document.getElementById('respuesta').innerHTML = "<h2>Cédula: " + cedula + "</h2>";
                document.getElementById('respuesta').innerHTML += "<h2>Nombre: " + nombres + "</h2>";
                document.getElementById('respuesta').innerHTML += "<h2>Apellido: " + apellidos + "</h2>";
                document.getElementById('respuesta').innerHTML += "<h2>Edad: " + edad + "</h2>";
                document.getElementById('respuesta').innerHTML += "<h2>Correo: " + correo + "</h2>";
                document.getElementById('respuesta').innerHTML += "<h2>Descripcion: " + descripcion + "</h2>";
                document.getElementById('respuesta').innerHTML += cont0;


                edad = parseInt(edad);
                if (edad > 17) {
                    document.getElementById('respuesta').innerHTML += "<h2>Mayor de edad</h2>";
                } else {
                    document.getElementById('respuesta').innerHTML += "<h2>Menor de edad</h2>";
                }
            }
            var contIdContacto = 1;
            function addContacto() {
                var inputContacto = "<br><input type ='texto' id='contacto" + contIdContacto + "' required=''/> ";
                contIdContacto++;
                document.getElementById('contactos').innerHTML += inputContacto;
            }
        </script>
        <br><br>
        <div align="center"> <h5>Pronto nos comunicaremos contigo</h5> </div>
        
<footer id="footer">
            <div class="contenedor footer-content">
                <div class="contact-us">
                    <h2 class="brand">Direccion:</h2>
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
