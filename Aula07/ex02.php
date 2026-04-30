<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 | Aula 07</title>
</head>
<body>
    <?php
        $funcionarios = ["Rian", "Larissa", "Jorge", "Murilo", "Lorenzo", "Kaio"];

        for ($i=0; $i < count($funcionarios); $i++) { 
            echo "ID: $i | Funcionário: $funcionarios[$i] <br>";
        }

        echo "<hr>";

        foreach ($funcionarios as $key => $value) {
            echo "$funcionarios[$key] <br>";
        }
    ?>
</body>

</html>