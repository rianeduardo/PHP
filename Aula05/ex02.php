<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 | Aula 05</title>
</head>

<body>
    <?php 
        $funcionarios = 120;

        if ($funcionarios < 50) {
            echo "<h1>Empresa de <i>pequeno</i> porte</h1>";
        } else if ($funcionarios < 100) {
            echo "<h1>Empresa de <i>médio</i> porte</h1>";
        } else {
            echo "<h1>Empresa de <i>grande</i> porte</h1>";
        }
    ?>
</body>

</html>