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
                <?=($nota>=0 && $nota<=5? 'muy mal': '')?>
            </td>
        </tr>
    </tbody>
</table> 