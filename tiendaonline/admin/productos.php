<?php include "cabecera.inc";?>
<?php include "../php/config.inc" ?>
<table>
<?php

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT  * FROM productos ";
$resultado = mysqli_query($conexion, 
$peticion);
    while($fila = mysqli_fetch_array($resultado)){
        
        echo '<tr>';
         
    echo'
    <form action="actualizarproducto.php?id='.$fila['id'].'" method="POST">
    <td><input type="text" name="nombre" value="'.$fila['nombre'].'"</td>
     <td><input type="text" name="precio" value="'.$fila['precio'].'"</td>
     <td><input type="text" name="peso" value="'.$fila['peso'].'"</td>
     <td><input type="text" name="longitud" value="'.$fila['longitud'].'">x<input type="text" name="anchura" value="'.$fila
     ['anchura'].'">x<input type="text" name="altura" value="'.$fila['altura'].'"></td>
     <td><input type="text" name="existencias" value="'.$fila['existencias'].'"</td>
    <td><input type="text" name="activado" value="'.$fila['activado'].'"</td>
    <td><input type="submit" value="Actualizar"></td>
      </form>
    <td><a href="eliminarproducto.php?id='.$fila['id'].'"><button>Borrar</button></a></td>
    </form>
    </tr>';

    
}
mysqli_close($conexion);
?>
<tr>
<form action="nuevoproducto.php" method="POST"enctype="multipart/form-data">
<td><input type="text" name="nombre" placeholder="Nombre Cliente"></td>
<td><input type="text" name="precio" placeholder="Precio"></td>
<td><input type="text" name="peso" placeholder="Peso"></td>
<td><input type="text" name="longitud" placeholder="Longitud">x<input type="text"name="anchura"
placeholder="Anchura">x<input type="text" name="altura" placeholder="Altura"></td>
<td><input type="text" name="existencias" placeholder="Existencias"></td>
<td><input type="text" name="activado" placeholder="Producto activado"></td>
<td><input type="file" name="imagen" placeholder="Imagen del producto"></td>
<td><input type="submit"></td>
</form>
</tr>
</table>
<?php include "piedepagina.inc";?>