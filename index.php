<?php

    $nota1 = $_GET["n1"];

    $nota2 = $_GET["n2"];

    $nota3 = $_GET["n3"];



    $media = ($nota1*2+$nota2*3+$nota3*5) / 10;



    echo "<h2> Sua média é $media </h2>";

   

    if ($media >= 60) {

        echo "<br/> aprovado";

    } else if($media < 40){

        echo "<br/> reprovado";

    }else{

        echo "<br/> em recuperação";

    }

?>
