<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 | AULA 09</title>
</head>

<body>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Rian Eduardo Pereira">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" placeholder="email@dominio.com">
        <label for="mensagem">Mensagem:</label>
        <input type="text" name="mensagem" id="mensagem" placeholder="Tive um problema com...">
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
    <?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    echo "<h2>Dados recebidos</h2>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Mensagem: $mensagem";
    ?>

</body>

</html>