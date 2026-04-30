<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4 | Aula 07</title>
</head>
<body>
    <?php
        $funcionarios = [
            ["nome" => "Ana", "cargo" => "Analista", "salario" => 3500],
            ["nome" => "Rian", "cargo" => "CEO", "salario" => 40000],
            ["nome" => "Larissa", "cargo" => "Professora", "salario" => 12000],
            ["nome" => "Ronaldo", "cargo" => "Programador Júnior", "salario" => 5000],
        ];

        foreach ($funcionarios as $f) {
            echo $f["nome"] . "-" . $f["cargo"] . "<br>";
        }
    ?>
</body>

</html>