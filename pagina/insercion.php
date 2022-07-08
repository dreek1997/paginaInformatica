<?php
$f=date("y/m/d"); 
$h=date("H:i a");
include("conexion.php");
$result = mysqli_query($link,"INSERT INTO contactos(nombre,apellido,correo,comentario) VALUES ('$_POST[nombre]','$_POST[apellido]','$_POST[correo]','$_POST[comentario]')");
echo 'Gracias por visitar nuestra pagina :) .<br>';
mysqli_close($link);
echo '<a href="index.html"><button>Inicio</button></a>';

?>
