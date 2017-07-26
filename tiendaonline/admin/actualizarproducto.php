<?php include "../php/config.inc" ?>
<?php

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "
UPDATE productos SET
 nombre='".$_POST['nombre']."',
  precio='".$_POST['precio']."',
   peso='".$_POST['peso']."',
    longitud='".$_POST['longitud']."',
     altura='".$_POST['altura']."',
      anchura='".$_POST['anchura']."',
       existencias='".$_POST['existencias']."',
        activado='".$_POST['activado']."'

        WHERE id=".$_GET['id']."
        ";
 
 $resultado = mysqli_query($conexion, $peticion);
 mysqli_close($conexion);
 ?>
 <script type="text/javascript">
 window.location="productos.php";
 </script>