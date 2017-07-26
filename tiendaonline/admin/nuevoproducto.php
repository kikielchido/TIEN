<?php include "../php/config.inc" ?>
<?php

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "INSERT INTO productos VALUES (NULL,'".$_POST['nombre']."','','".$_POST['precio']."','".$_POST['peso']."','".$_POST['longitud']."','".$_POST
['anchura']."','".$_POST['altura']."','".$_POST['existencias']."','".$_POST['activado']."')";
 $resultado = mysqli_query($conexion, $peticion);

 $peticion = "SELECT * FROM productos ORDER BY id DESC LIMIT 1";
 $resultado = mysqli_query($conexion, $peticion);
    while($fila = mysqli_fetch_array($resultado)){
        $id = $fila['id'];
    }
if($_FILES['imagen']['type'] == "image/gif" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']
['type'] == "image/png"){
move_uploaded_file($_FILES['imagen']['tmp_name'],"../photo/".$_FILES['imagen']['name']);
}
    $peticion = "INSERT INTO imagenesproductos VALUES (NULL,'".$id."','".
    $_FILES['imagen']['name']."','','')";
     $resultado = mysqli_query($conexion, $peticion);
 mysqli_close($conexion);
 ?>
 <script type="text/javascript">
 //window.location="productos.php";
 </script>