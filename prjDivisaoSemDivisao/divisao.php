<?php
    $numero = $_POST['txtNmr'];
    $divisor = $_POST['txtDiv'];
    $cont = 0;
    while ($numero >= $divisor) {
        $cont++;
        $numero -= 5;
    }
    echo $cont;
?>