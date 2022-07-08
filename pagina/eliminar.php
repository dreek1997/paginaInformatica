<?php
include("conexion.php");
$result=mysqli_query($link,"DELETE from contactos WHERE id='$_POST[datounico]'");
echo 'MENSAJE COMO: SE HA BORRADO '.$_POST['datounico'];
?>

