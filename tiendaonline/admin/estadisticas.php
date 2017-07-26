<?php include "cabecera.inc";?>
<?php include "../php/config.inc" ?>

<?php

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "
SELECT idproducto,productos.nombre,COUNT(idproducto) FROM `lineaspedido` LEFT JOIN
productos ON lineaspedido.idproducto = productos.id GROUP BY idproducto ORDER BY
COUNT(idproducto) DESC LIMIT 1
";
$resultado = mysqli_query($conexion, $peticion);
    while($fila = mysqli_fetch_array($resultado)){
     echo"El producto mas comprado es: ".$fila['nombre'];   
}

echo "<br>";
echo "Los productos mas comprados:";
echo "<table>";
$peticion = "
SELECT idproducto,productos.nombre,COUNT(idproducto) FROM `lineaspedido` LEFT JOIN
productos ON lineaspedido.idproducto = productos.id GROUP BY idproducto ORDER BY
COUNT(idproducto) DESC 
";
$resultado = mysqli_query($conexion, $peticion);
    while($fila = mysqli_fetch_array($resultado)){
     echo"<tr><td>".$fila['nombre']."</td><td>".$fila['COUNT(idproducto)']."</td></tr>"; 
}
echo "</table>";

$peticion = "
SELECT
clientes.nombre,clientes.apellidos,SUM(unidades*precio) FROM `pedidos` LEFT JOIN lineaspedido ON pedidos.id = lineaspedido.idpedido LEFT
JOIN productos ON lineaspedido.idproducto = productos.id LEFT JOIN clientes ON
pedidos.idcliente = clientes.id GROUP BY idcliente ORDER BY SUM(precio) DESC LIMIT 1
";
$resultado = mysqli_query($conexion, $peticion);
    while($fila = mysqli_fetch_array($resultado)){
     echo"El mejor cliente de la tienda es: ".$fila['nombre']." ".$fila['apellidos']."
     ya que se ha gastado ".$fila['SUM(unidades*precio)']."$";   
}

echo "<br>";
echo "Los mejores clientes:";
echo "<table>";
$peticion = "
SELECT
clientes.nombre,clientes.apellidos,SUM(unidades*precio) FROM `pedidos` LEFT JOIN lineaspedido ON pedidos.id = lineaspedido.idpedido LEFT
JOIN productos ON lineaspedido.idproducto = productos.id LEFT JOIN clientes ON
pedidos.idcliente = clientes.id GROUP BY idcliente ORDER BY SUM(precio) DESC LIMIT 10
";
$resultado = mysqli_query($conexion, $peticion);
    while($fila = mysqli_fetch_array($resultado)){
     echo"<tr><td>".$fila['nombre']." ".$fila['apellidos']."</td><td>".$fila['SUM(unidades*precio)']."</td></tr>"; 
}
echo "</table>";
mysqli_close($conexion);
?>
<?php include "piedepagina.inc";?>

