<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S8_R1_AT1 | PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <style>
        /* Reset geral e fontezinha */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Lexend', sans-serif;
        }

        body {
            margin: 20px 50px;
        }

        hr {
            margin: 20px 0px;
        }
    </style>
</head>

<body>
    <h1>Batalha de EMPRESAS! XPTO vs XYZ</h1>
    <hr>
    <h2>Comparação de PORTE:</h2>
    <?php
    $funcionariosXpto = 5340; // Numero de funcionarios da XPTO
    $funcionariosXyz = 4032; // Numero de funcionarios da XYZ

    // Função para calcular o porte da empresa com base no número de funcionários
    // Recebe um parâmetro inteiro (número de funcionários) e retorna uma string
    function calcularPorte(int $funcionarios)
    {
        if ($funcionarios < 1500) { // Se o parametro for menor que 1500
            return "Pequeno porte";
        } else if ($funcionarios < 3000) { // Se for menor que 3000
            return "Médio porte";
        } else { // Se não bater as anteriores
            return "Grande porte";
        }
    }

    // Função para exibir informações da empresa
    // Recebe parâmetros: nome da empresa e número de funcionários
    // Não retorna valor nenhum, apenas exibe na tela
    function exibirEmpresa($nome, $funcionarios)
    {
        echo "<h3>Empresa: $nome</h3>";
        echo "<p>Número de funcionários: $funcionarios</p>";
        $porte = calcularPorte($funcionarios); // Reutilizando a função calcularPorte
        echo "<p>Porte: $porte</p>";
        echo "<hr>";
    }

    // Chamando a função para exibir as empresas
    exibirEmpresa("XPTO", $funcionariosXpto);
    exibirEmpresa("XYZ", $funcionariosXyz);

    echo "<p>A empresa XPTO tem $funcionariosXpto, uma empresa de... " . calcularPorte($funcionariosXpto) . "!</p>";
    echo "<p>A empresa XYZ tem $funcionariosXyz, uma empresa de... " . calcularPorte($funcionariosXyz) . "!</p>";

    echo "<br><p><i>Temos um empate!</i></p>";

    echo "<hr>";
    ?>
</body>

</html>