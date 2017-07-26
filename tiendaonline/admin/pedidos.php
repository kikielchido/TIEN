<?php include "cabecera.inc";?>
<?php include "../php/config.inc" ?>
<table border=1>
<?php

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion="SELECT pedidos.id AS idpedidos,fecha,estado,nombre,apellidos 
 FROM pedidos LEFT JOIN
 clientes ON pedidos.id = clientes.id ORDER BY  estado,fecha  ASC";
$resultado=mysqli_query($conexion, $peticion);
while ($fila=mysqli_fetch_array($resultado)) {
  $estado=$fila ['estado']; 

switch ($estado) {
    case 0: $diestado ="no servido";break;
    case 1: $diestado ="servido";break;
    case 2: $diestado ="anulado";break;
}
  echo '<tr';
  switch ($estado) {
    case 0: echo  ' style="background:rgb(255,200,200);"';break;
    case 1: echo  ' style="background:rgb(200,255,200);"';break;
    case 2: echo  ' style="background:rgb(255,255,200);"';break;
}
  echo '><td>'.$fila['nombre']."  ".$fila['apellidos'].'
  </td><td>'.date("M d Y H:i:s",$fila['fecha']).'</td><td>'
  .$diestado.'</td><td><a href="gestionpedido.php? id='.$fila['idpedidos'].'"><button>Gestionar</button></a>
  <a href="../php/pedidoservido.php? id='.$fila['idpedidos'].'"><button>Pedido Servido</button></a>
  <a href="../php/cancelarpedido.php? id='.$fila['idpedidos'].'"><button>Cancelar Pedido</button></a></td></tr>';
}
mysqli_close($conexion);
?>
</table>