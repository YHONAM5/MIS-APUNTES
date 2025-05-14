<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Inserción de Clientes</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNomCom" placeholder="Nombre Completo">
            <input type="text" name="txtDNI" placeholder="DNI">
            <input type="submit" value="Guardar">
        </form>
    </div> 
</body>
</html>
<?php
    if($_POST){
        require 'conexion.php';
        $sql = 'inser into clientes (nombre_completo, dni) values (:nom,:dni)';
    }

?>