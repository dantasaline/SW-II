<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta CEP - ViaCEP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Consulta de CEP</h2>
    <form method="POST">
        <label for="cep">Digite o CEP:</label><br>
        <input type="text" id="cep" name="cep" pattern="\d{8}" required placeholder="Ex: 01001000">
        <input type="submit" value="Pesquisar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["cep"])) {
        $cep = preg_replace('/\D/', '', $_POST["cep"]);
        $url = "https://viacep.com.br/ws/{$cep}/json/";

        $json = @file_get_contents($url);
        if ($json === FALSE) {
            echo "<p>Erro ao consultar o CEP.</p>";
        } else {
            $dados = json_decode($json, true);

            if (isset($dados["erro"])) {
                echo "<p>CEP não encontrado.</p>";
            } else {
                $regioes = [
                    'Norte' => ['AC','AP','AM','PA','RO','RR','TO'],
                    'Nordeste' => ['AL','BA','CE','MA','PB','PE','PI','RN','SE'],
                    'Centro-Oeste' => ['DF','GO','MT','MS'],
                    'Sudeste' => ['ES','MG','RJ','SP'],
                    'Sul' => ['PR','RS','SC']
                ];

                $regiao = "Desconhecida";
                foreach ($regioes as $nome => $ufs) {
                    if (in_array($dados["uf"], $ufs)) {
                        $regiao = $nome;
                        break;
                    }
                }

                echo "<div class='resultado'>
                        <strong>Logradouro:</strong> {$dados['logradouro']}<br>
                        <strong>Bairro:</strong> {$dados['bairro']}<br>
                        <strong>Localidade:</strong> {$dados['localidade']}<br>
                        <strong>UF:</strong> {$dados['uf']}<br>
                        <strong>Estado:</strong> {$dados['uf']}<br>
                        <strong>Região:</strong> $regiao
                      </div>";
            }
        }
    }
    ?>
</body>
</html>
