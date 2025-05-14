<?php
    $nombre = $_GET['txtNombre'];
    $nota = $_GET['txtNota'];
    $curso = $_GET['cbxCurso']

?>
<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Nota</th>
            <th>Curso</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$nombre?></td>
            <td><?=$nota?></td>
            <td>
                <?php
                    $nombreCurso=($curso=='1'?"Java oracle":($curso=='2'?"Ing. software":"Backend"));
                    echo $nombreCurso;
                ?>
            </td>
            <td>
                <?php
                    $estado = "";
                    if($nota<='5'){
                        $estado="Muy mal";
                    }else if($nota>'8'&& $nota<= '10'){
                        $estado= "Mal";
                    }else if($nota>='11'&&$nota<'14'){
                        $estado="Regular";
                    }else{
                        $estado= "Muy bueno";
                    }
                    echo $estado;
                ?>
            </td>
        </tr>
    </tbody>
</table> 