
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
    <!-- <link rel="stylesheet" type="text/css" href="/inicio-registro.css">

    <link rel="stylesheet" href="/inicio-registro.css"> -->
       
       
</head>
<body>

 




</body>
</html>



<?php

if(isset($_POST['enviar'])){
    
    $producto = $_POST['producto.id'];
    $descripcion = $_POST['"producto.nombre"'];
    $importe = $_POST['"producto.precio"'];
         
    $insertarDatos = "INSERT INTO pedidos_realizados VALUES ('','$producto.','$descripcion','$importe')";
    
    $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

}
?>