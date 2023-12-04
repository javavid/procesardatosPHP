<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= 'stylesheet' href=''>
    <title>procesar datos</title>
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //recuperar los datos del formulario.
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $edad=$_POST['edad'];
        //mostrar datos.

        echo"<h2>DATOS RECIBIDOS</h2>";
        echo"<p><Strong>NOMBRE:</Strong>$nombre<p>";
        echo"<p><Strong>APELLIDO:</Strong>$apellido<p>";
        echo"<p><Strong>EDAD:</Strong>$edad<p>";
        
    }
    ?>
</body>
</html>