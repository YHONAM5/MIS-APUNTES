<ul>
    <?php
        $f1 = $_GET['txtF1'];
        for ($f2= 0; $f2<=12;$f2++){

    ?>
    <li><?=$f1.'*'.$f2.'='.($f1*$f2)?></li>
    <?php
        }
    ?>
</ul>