<?php
require 'conexion.php';
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$ciudad=$_POST['ciudad'];
$password= password_hash($_POST['password'], PASSWORD_DEFAULT);
$estado=$_POST['estado'];
$codigo=$_POST['codigo'];
$verifico_email=mysqli_query($db_connection, "SELECT user FROM usuarios WHERE user='$usuario'");
if(mysqli_num_rows($verifico_email)>0){
    echo'<script type="text/javascript">
    alert("Ya existe una cuenta con el correo");
    window.location.href="register.html";
    </script>';
}else{
    $insertar_usuario=mysqli_query($db_connection, "INSERT INTO 
    usuarios(nombre_usuario, apellido_usuario, user, password, ciudad, estado, codigo_postal)VALUES
    ('$nombre', '$apellido', '$email', '$password', '$ciudad', '$estado', '$codigo')");
}
if($insertar_usuario === TRUE){
    echo'<script type="text/javascript">
    alert("Usuario guardado con exito");
    window.location.href="index.html";
    </script>';
}else{
    echo'<script type="text/javascript">
    alert("Usuario no guardado correctamente");
    window.location.href="register.html";
    </script>';  
}

?>