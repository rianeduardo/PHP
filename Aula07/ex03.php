<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 | Aula 07</title>
</head>
<body>
    <?php
        $funcionarios = [
            "nome" => "Ana",
            "cargo" => "Analista",
            "salario" => 3500
        ];

        echo $funcionarios["nome"] . "<br>";
        echo $funcionarios["cargo"] . "<br>";
        echo $funcionarios["salario"];
    ?>
</body>

</html>