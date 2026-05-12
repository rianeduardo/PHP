<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XPTO | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <style>
        <?php require $themeCss; // carrega o CSS do tema atual ?>
    </style>
</head>

<body>
    <?php require 'header.php'; ?>

    <div class="container">
        <h2 class="main-title">Sistema de Informação do Usuário</h2>

        <!-- Se o valor de usuário e cargo NÃO (!) estiverem vazios na sessão, faz isso -->
        <?php if (!empty($_SESSION['user']) || !empty($_SESSION['cargo']))
            echo "<div class='info'>";
                echo "<strong>Olá, " . $_SESSION["user"] ?? "colaborador" . "</strong>";
                echo "<p>Cargo atual: " . $_SESSION["cargo"] ?? "[NÃO INFORMADO]" . "</p>";
            echo "</div>";
        ?>

        <form method="POST">
            <!-- Formulário salva os dados do usuário na sessão -->
             <?php
             echo "<input type='text' name='user' placeholder='Nome do colaborador' value='" . $_SESSION["user"] . "'>";
             echo "<input type='text' name='cargo' placeholder='Cargo do colaborador' value='" . $_SESSION["cargo"] . "'>";
             echo "<button type='submit'>Salvar na sessão</button"
             ?>
        </form>
    </div>

    <?php require 'footer.php'; ?>
</body>

</html>