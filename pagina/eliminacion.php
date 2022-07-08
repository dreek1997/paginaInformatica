
<?php
include("conexion.php");
$result=mysqli_query($link,"SELECT*from contactos");
echo '<center><table border = "1">';
echo '<tr > ';
echo '<td ><b> id</b></td> ';
echo '<td ><b> nombre</b></td> ';
echo '<td ><b> apellido</b></td> ';
echo '<td ><b> correo</b></td> ';
echo '<td ><b> comentario</b></td>';


echo '</tr> ';
while ($row = mysqli_fetch_row($result)){
echo '<tr>';
foreach($row as $clave) {
echo '<td>',$clave,'</td>';
}
}
echo '</table>';
mysqli_free_result($result);
mysqli_close ($link);

echo '<form name="borrado" method="post" action="eliminar.php">';
echo '<input type="text" name="datounico" size=5>';
echo'<input type="submit" name="enviar" value="Enviar" >';
?>
