<?php include "../php/config.inc" ?>
<?php

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "
UPDATE clientes SET
 nombre='".$_POST['nombre']."',
  apellidos='".$_POST['apellidos']."',
   email='".$_POST['email']."',
    usuario='".$_POST['usuario']."',
    contrasena='".$_POST['contrasena']."',
      telefono='".$_POST['telefono']."',
       movil='".$_POST['movil']."',
        fax='".$_POST['fax']."',
        direccioncalle='".$_POST
        ['direccioncalle']."',
        codigopostal='".$_POST['codigopostal']."',
        poblacion='".$_POST['poblacion']."',
        pais='".$_POST['pais']."',
        dninif='".$_POST['dninif']."'

        WHERE id=".$_GET['id']."
        ";
 
 $resultado = mysqli_query($conexion, $peticion);
 mysqli_close($conexion);
 ?>
 <script type="text/javascript">
 window.location="clientes.php";
 </script>