<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 | Aula 08</title>
</head>

<body>
    <?php
    function mensagem()
    {
        echo "Bem-vindo ao sistema da empresa!<br>";
    }

    mensagem();
    
    echo "<hr>Loop com for:<br>";

    for ($i=0; $i < 50; $i++) { 
        mensagem();
    }
    ?>
</body>

</html>