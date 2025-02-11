<?php
    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 9; 
    $media = ($nota1 + $nota2 + $nota3)/3;

    echo "Nota 1 = " .$nota1."<br>";
    echo "Nota 2 = " .$nota2."<br>";
    echo "Nota 3 = " .$nota3."<br>";
    echo "<br>";

    if ($media >= 6 ){
        echo "Media " . $media . " aprovado!";
    } else {
        echo "Reprovado!";
    }   

?>