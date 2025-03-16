<?php
function fatorial($numero) {
    if ($numero < 0) {
        return "Número inválido.";
    }
    
    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    
    return $fatorial;
}

echo "O fatorial de 5 é: " . fatorial(5);
?>
