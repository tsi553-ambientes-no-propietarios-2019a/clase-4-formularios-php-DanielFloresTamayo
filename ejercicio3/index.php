<?php
/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. 
 * Acceder a cada componente por su nombre.
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
<?php //include('app/process_form.php'); ?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <h1 align = "center">EJERCICIO 1</h1>
	</head>
	<body>
   <?php
   $user = $_POST["user"];
   $pass = $_POST["pass"];
   include('Vistas/login.php');
   ?>
   

	</body>

</html>	


<?php
$usuarios= array(
   'Daniel'=>1234,
   'Paul'=>4321,
   'Richie'=>123,
   'Sebastien'=>231
);
print_r($usuarios);
//echo ($usuarios);

?>
