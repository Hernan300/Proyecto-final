
<head>
<link REL="stylesheet" TYPE="text/css" HREF="formulario1php.css" MEDIA=screen>
</head>



<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDedatos = "usuarios";

$enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDedatos);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscripción</title>
    <link rel="stylesheet" type="text/css" href="formulario1php.css">
     
</head>
<body>
    
<div class="formulario">
<form action="http://localhost/proyecto%20final/formulario1.php#" name="usuarios" method="POST">

<h1>SU FORMULARIO FUE ENVIADO EXITOSAMENTE</h1>
<h2>Recuerde acercarce al Club para culminar la suscripción</h2>
<br>
<br>
<br>
<br>
<button><a href="http://127.0.0.1:5500/formulario1.html">Volver al formulario de inscripción</a></button>

</form>
</div>

</body>
</html>


<?php

  if(isset($_POST['enviar'])){
      
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $email = $_POST['email'];
      $telefono = $_POST['telefono']; 
      $domicilio = $_POST['domicilio'];
      
      $insertarDatos = "INSERT INTO datos VALUES ('','$nombre','$apellido','$email','$telefono','$domicilio')";
      
      $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

  }
?>
