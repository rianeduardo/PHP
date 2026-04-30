<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S8_R1_AT1 | PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <style>
        /* Reset geral e fontezinha */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Lexend', sans-serif;
        }

        body {
            margin: 20px 50px;
        }

        h1,
        h2,
        p {
            margin: 10px 0px;
        }
    </style>
</head>

<body>
    <h1>Batalha de EMPRESAS! [ XPTO ] vs [ XYZ ]</h1>
    <hr>
    <h2>Comparação de PORTE:</h2>
    <?php
    $funcionariosXpto = 5340; // Numero de funcionarios da XPTO
    $funcionariosXyz = 4032; // Numero de funcionarios da XYZ

    // Calcular porte das empresas
    function calcularPorte(int $funcionarios)
    {
        if ($funcionarios < 1500) {
            return "Pequeno porte";
        } else if ($funcionarios < 3000) {
            return "Médio porte";
        } else {
            return "Grande porte";
        }
    }

    echo "<p>A empresa XPTO tem $funcionariosXpto, uma empresa de... " . calcularPorte($funcionariosXpto) . "!</p>";
    echo "<p>A empresa XYZ tem $funcionariosXyz, uma empresa de... " . calcularPorte($funcionariosXyz) . "!</p>";

    echo "<br><p><i>Temos um empate!</i></p>"
    ?>
</body>

</html>