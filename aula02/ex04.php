<?php
$opcao = 2;

echo "Opções:<br>";
echo "1 - Azul<br>";
echo "2 - Verde<br>";
echo "3 - Vermelho<br><br>";

switch ($opcao) {
    case 1:
        echo "Você escolheu a Azul.";
        break;
    case 2:
        echo "Você escolheu a Verde.";
        break;
    case 3:
        echo "Você escolheu a Vermelho.";
        break;
    default:
        echo "Opção inválida.";
        break;
}
?>
