<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 | Aula 08</title>
</head>

<body>
    <?php
        function calcularAnosEmpresa($anoFundacao, $anoHoje) {
            return ($anoHoje - $anoFundacao);
        }

        $tempoTotal = calcularAnosEmpresa(1884, 2026);

        echo "<strong>Nossa empresa tem $tempoTotal anos de atuação!</strong>";
    ?>
</body>

</html>