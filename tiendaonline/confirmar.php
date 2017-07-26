<?php include "php/cabecera.inc" ?>
<br>
¿Ya eres usuario?<br>
<form action="php/logcliente.php"
method="POST">

<input type="text" name="usuario"
placeholder="Introduce tu nombre de usuario">
<input type="next" name="contrasena"
placeholder="Introduce tu contraseña">
<input type="submit">
</form>
¿Eres nuevo usuario?<br>
<form action="php/nuevoclienteweb.php" method="POST">
 <input type="text" name="usuario" placeholder="Usuario"><br>
 <input type="text" name="contrasena" placeholder="Contraseña"><br>
 <input type="text" name="nombre" placeholder="Nombre"><br>
 <input type="text" name="apellidos" placeholder="Apellidos"><br>
 <input type="text" name="email" placeholder="E-mail"><br>
 <input type="text" name="telefono" placeholder="Telefono"><br>
 <input type="text" name="movil" placeholder="Movil"><br>
 <input type="text" name="fax" placeholder="Fax"><br>
 <input type="text" name="direccioncalle" placeholder="Direccion"><br>
 <input type="text" name="codigopostal" placeholder="Codigo Postal"><br>
 <input type="text" name="poblacion" placeholder="Poblacion"><br>
 <input type="text" name="pais" placeholder="Pais"><br>
 <input type="text" name="dninif" placeholder="Nif"><br>
<input type="submit">
</form>

<?php include "php/piedepagina.inc" ?>