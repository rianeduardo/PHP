<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 | Aula 10</title>
</head>
<body>
    <?php
        session_start();

        $_SESSION["usuario"] = "Rian";

        echo "Usuário armazenado na sessão<br><pre>";

        var_dump($_SESSION);

        echo "</pre>"
    ?>
</body>
</html>