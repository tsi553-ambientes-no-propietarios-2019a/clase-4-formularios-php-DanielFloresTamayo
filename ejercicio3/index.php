<?php
/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre.
 El arreglo debe tener el formato
 [
    'juan' => 'contrasena_segura'
 ]
 Crear un formulario que permita ingresar el nombre de usuario y la contraseña. 
 Al enviar el formulario se debe validar que la combinación de nombre de usuario y contraseña existan en el arreglo.
 Si los datos no son correctos imprimir un mensaje de error.
 Si los datos son correctos debe redirigir a otra página bienvenido.php que debe imprimir el mensaje "Bienvendo JUAN". (con el nombre de usuario en mayúsculas)
 */


?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <h1 align = "center">EJERCICIO 1</h1>
	</head>
	<body>
   <form method="post">
     <center>
     <div>
     <label>Nombre del usuario : <input type="text" id="usuario" /></label>
     </div>
     <br>
     <div>
     <label>Contraseña : <input type ="password" name = "pass" ></label>
     </div>
     </center>
      <br>
      <center><input type="submit" value="INGRESAR"/> </center>
</form>

	</body>
</html>	