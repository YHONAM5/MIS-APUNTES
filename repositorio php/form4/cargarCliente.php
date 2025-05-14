<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            require 'conexion.php';
            $sql = 'select * from clientes';
            $ps= $cn->prepare($sql);
            $ps -> execute();
            $clientes = $ps->fetchall();
            print_r ($clientes);
        ?>
        <h1>Mis Clientes</h1>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Completo</th>
                    <th>DNI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($clientes as $c){
                ?>
                <tr>
                    <th><?=$c[0]?></th>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div> 
</body>
</html>