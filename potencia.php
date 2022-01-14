<?php

function pot($x, $y){

    if(!is_int($y))
    {
        return "Número não é inteiro";
    }

    if($y < 0)
    {
        $x = 1 / $x;
        $y = $y * -1;
    }

    $total = 1;

    for($i = 0; $i < $y; $i++)
    {
        $total = $total * $x;
    }

    return $total;
}

    $nro1 = (int)$_POST['nro1'];
    $nro2 = (int)$_POST['nro2'];

    $pot = pot($nro1, $nro2);

    echo $pot;

?>