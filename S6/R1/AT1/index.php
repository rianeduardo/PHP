<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S6_R1_AT1 | PHP</title>
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $vendas = 1001; // 1001 vendas

        for ($i=1; $i <= $vendas; $i++) { // Index começa no 1 e termina no 1001 ($vendas)
            if ($i % 1000 == 0) { // IF integrado
                echo "<p><strong>[VENDA CADASTRADA!]</strong> | ID: $i <strong>[🎊 + 1 MILHAR DE VENDAS! 🎊]</strong></p>"; // Se a venda for um milhar, comemoração
            } else if ($i % 100 == 0) {
                echo "<p><strong>[VENDA CADASTRADA!]</strong> | ID: $i <strong>[🎊 + 1 CENTENA DE VENDAS! 🎊]</strong></p>"; // Se a venda for uma centena, comemoração
            } else {
                echo "<p><strong>[VENDA CADASTRADA!]</strong> | ID: $i</p>"; // Venda normal
            }
        }
    ?>
</body>
</html>