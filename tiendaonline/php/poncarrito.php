<?php include "config.inc" ?>
<?php 

session_start();
$suma = 0;
if(isset($_GET['p'])){
$_SESSION['producto'][$_SESSION['contador']] = $_GET['p'];
$_SESSION['cantidad'][$_SESSION['contador']] = $_GET['cant'];
$_SESSION['contador']++;

}


$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");

echo "<table>";
for($i = 0;$i<$_SESSION['contador'];$i++){
    //echo "Producto: ".$_SESSION['producto'][$i]."<br>";
    $peticion = "SELECT * FROM productos WHERE id=".$_SESSION['producto'][$i]."" ;
$resultado = mysqli_query($conexion, $peticion);
    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr><td>".$_SESSION
        ['cantidad'][$i]."</td><td>".$fila
        ['nombre']."</td>
        <td>".number_format(($_SESSION
        ['cantidad'][$i]*$fila
        ['precio']),2)."</td></tr>";
        $suma += $_SESSION['cantidad'][$i]*$fila['precio'];
   
}

}
echo "<tr><td>Subtotal</td><td>".number_format($suma,2)."</td></
tr>";
echo "</table>";
mysqli_close($conexion);
?>