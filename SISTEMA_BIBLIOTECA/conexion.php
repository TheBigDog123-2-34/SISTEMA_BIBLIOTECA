<?php

$server_name="localhost";
$user_name="root";
$password="";
$db_name="bd_biblioteca";
$db_connection = mysqli_connect($server_name,$user_name,$password,$db_name);
if(mysqli_connect_errno()){
    echo"Error al conectar db:".mysqli_connect_error();
}
?>