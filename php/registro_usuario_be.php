<?php

include'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
//ecritar con la variable sha512//
$contrasena= hash('sha512',$contrasena);

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
      VALUES ('$nombre_completo ','$correo','$usuario ','$contrasena')";

//verificar correo//
$verificar_correo = mysqli_query($conexion, "SELECT *FROM usuarios WHERE correo='$correo'");
    if(mysqli_num_rows($verificar_correo)>0){
        echo'
        <script>
            alert("Este correo ya existe");
            window.location="../acceso.php";
        </script>
';
        exit();
        }
        
        //verificar usuario//
$verificar_usuario = mysqli_query($conexion, "SELECT *FROM usuarios WHERE usuario='$usuario'");
    if(mysqli_num_rows($verificar_usuario)>0){
        echo'
        <script>
            alert("Este usuario ya existe");
            window.location="../acceso.php";
        </script>
';
        exit();
        }


$ejecutar = mysqli_query($conexion, $query);
if($ejecutar){
    echo '
        <script>
        alert("Usuario registrado");
        window.location="../acceso.php";
        </script>
    ';
}else{
    echo '
        <script>
        alert("Usuario no registrado");
        window.location="../acceso.php";
        </script>
    ';
}
mysqli_close($conexion)
?>