<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XPTO | Sobre</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <style>
        <?php require $themeCss; // aplica o tema escolhido pelo usuário ?>
    </style>
</head>

<body>
    <?php require 'header.php'; ?>
    <div class="container">
        <h2 class="main-title">Sobre o sistema</h2>
        <p>Esse pequeno sistema demonstra um uso de sessão e cookie na empresa XPTO.</p>
        <p>Os dados do usuário ficam na <strong>session</strong>, enquanto o tema (no caso claro ou escuro) é gravado no <strong>cookie</strong>.</p>
        <?php if (!empty($_SESSION['user'])) { // Se o nome de usuário NÃO estiver vazio na sessão (!) faz isso
            echo "<div class='info'>";
            echo "<p>Usuário conectado: <strong>" . $_SESSION['user'] . "</strong></p>";
            echo "<p>Cargo definido: <strong>" . $_SESSION['cargo'] ?? '[NÃO INFORMADO]' . "</strong></p>";
            echo "</div>";
        }
        ?>
    </div>
    <?php require 'footer.php'; ?>
</body>

</html>