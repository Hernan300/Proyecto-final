
<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDedatos = "pedidos";

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
<body>
    
<div class="form">
<form action="http://localhost/proyecto%20final/js/pagina-3.php#" name="pedidos" method="POST">
  

<h1>SU PEDIDO FUE ENVIADO EXITOSAMENTE</h1>
<P>Recuerde retirarlo por Esquel 453, Ezpeleta</p>

<br>
<br>
<br>
<button><a href="http://127.0.0.1:5500/inicio.html">Volver</a></button>

</form>
</div>

</body>
</html>



<?php

  if(isset($_POST['Finalizar'])){
      
      $producto = $_POST['producto'];
      $descripcion = $_POST['descripcion'];
      $importe = $_POST['importe'];
    
           
      $insertarDatos = "INSERT INTO pedidos_realizados VALUES ('','$producto','$descripcion','$importe')";
      
      $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

  }
?>


