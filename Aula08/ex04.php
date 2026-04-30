<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4 | Aula 08</title>
</head>

<body>
    <?php
        function classificarEmpresa($numFuncionarios) {
            if ($numFuncionarios < 50) {
                return "pequeno porte";
            } else if ($numFuncionarios < 100) {
                return "médio porte";
            } else {
                return "grande porte";
            }
        }

        echo "A empresa XPTO é de " . classificarEmpresa(40) . "<strong>! Com 40 funcionários!</strong><br><br>";
        echo "A empresa XYZ é de " . classificarEmpresa(87) . "<strong>! Com 87 funcionários!</strong><br><br>";
        echo "A empresa ABC é de " . classificarEmpresa(140) . "<strong>! Com 140 funcionários!</strong><br><br>";
    ?>
</body>

</html>