<?php include "config.inc" ?>
<?php
$contador = 0;
$conexion = mysqli_connect($servidor,$usuario,
$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT * FROM clientes WHERE usuario = '".$_POST['usuario']."'";
$resultado = mysqli_query($conexion, $peticion);

while($fila = mysqli_fetch_array($resultado)) {
    $contador++;
}

if($contador ==0){
$peticion = "INSERT INTO clientes VALUES 
(NULL,'".$_POST['nombre']."','".$_POST
['apellidos']."','".$_POST['email']."','".
$_POST['usuario']."','".$_POST
['contrasena']."','".$_POST['telefono']."','".
$_POST['movil']."','".$_POST['fax']."','".
$_POST['direccioncalle']."','".$_POST
['codigopostal']."','".$_POST
['poblacion']."','".$_POST['pais']."','".
$_POST['dninif']."')";
$resultado = mysqli_query($conexion, 
$peticion);
mysqli_close($conexion);
 
 echo '
 <script>
    window.location="logcliente.php?usuario='.$_POST['usuario'].'&contrasena='.$_POST['contrasena'].'" 
 </script>
 ';
}else{
   echo '
 <script>
    window.location="confirmar.php" 
 </script>
';
}
 ?>