<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4 | AULA 09</title>
</head>

<body>
    <h1>Formulário</h1>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Rian Eduardo Pereira">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" placeholder="email@dominio.com">
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>

    <h2>Dados recebidos:</h2>
    <?php
    function exibirDado(String $label, String $valor) {
        echo "$label: $valor <br>";
    }

    if (isset($_POST["nome"], $_POST["email"])) {
        exibirDado("Nome", $_POST["nome"]);
        exibirDado("E-mail", $_POST["email"]);
    }
    ?>

</body>

</html>