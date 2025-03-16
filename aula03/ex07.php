<?php
function somaArray($numeros) {
    return array_sum($numeros);
}

$numeros = [10, 20, 30, 40, 50];
echo "A soma dos elementos é: " . somaArray($numeros);
?>