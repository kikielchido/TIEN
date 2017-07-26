<?php include "../php/config.inc" ?>
<?php

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
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
 $resultado = mysqli_query($conexion, $peticion);
 mysqli_close($conexion);
 ?>
 <script type="text/javascript">
 window.location="clientes.php";
 </script>