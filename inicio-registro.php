
<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDedatos = "registros";

$enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDedatos);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscripción</title>
    
    <link rel="stylesheet" type="text/css" href="/inicio-registro.css">

   
       
</head>
<body style="background-color: blue">
    
<div class="formulario">
<form action="http://localhost/proyecto%20final/inicio-registro.php#" name="registros" method="POST">
  

<h1 style="color:white; text-align: center;  padding: 50px;"> SU USUARIO FUE ENVIADO EXITOSAMENTE</h1>


<br>
<br>
<br>
<button  style="font-size: 40px; background-color:#21618c; display: block; margin: auto " >
  <a style="text-decoration: none; color:white" href="http://127.0.0.1:5500/inicio.html">Volver</a></button>

</form>
</div>

</body>
</html>



<?php

  if(isset($_POST['enviar'])){
      
      $nombre_completo = $_POST['nombre_completo'];
      $correo = $_POST['correo'];
      $usuario = $_POST['usuario'];
      $clave = $_POST['clave']; 
           
      $insertarDatos = "INSERT INTO usuarios_registrados VALUES ('','$nombre_completo','$correo','$usuario','$clave')";
      
      $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

  }
?>

