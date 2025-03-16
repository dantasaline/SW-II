<?php
function soma($numeros) {
    return array_sum($numeros);
}

$numeros = [1, 2, 3, 4, 5];
echo "A soma dos elementos ". implode(", ", $numeros) ."<br> é: " . soma($numeros);
?>