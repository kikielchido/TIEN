<?php
session_start();
if(!isset($_SESSION['contador'])){$_SESSION['contador']=0;}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Tienda</title>
        
        <link rel = Stylesheet href="estiloadmin.css" >
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     
    </head>
    <body>

    <div id="contenedor">
    <header>
    <a href="index.php"><h1>Panel de control</h1></a>
    <h2>Tienda online</h2>
    <a href='pedidos.php' class="botonmenu">Gestionar pedidos</a>
    <a href='clientes.php' class="botonmenu">Gestionar clientes</a>
    <a href='productos.php' class="botonmenu">Gestionar productos</a>
    <a href='estadisticas.php' class="botonmenu">Gestionar estadisticas</a>
    <div style="clear:both;"></div>
    </header>
    <section>
  