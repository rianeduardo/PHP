<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 | Aula 08</title>
</head>

<body>
    <?php
        function mensagemFlexivel($nomeEmpresa) {
            echo "Bem vindo à $nomeEmpresa<br><br>";
        }

        mensagemFlexivel("Empresa XPTO");
        mensagemFlexivel("Empresa XYZ");
        mensagemFlexivel("Empresa Boua");
        mensagemFlexivel("Empresa Ruim Malvada");
    ?>
</body>

</html>