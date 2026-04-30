<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Lexend', sans-serif;
            color: #222;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #fcfcfc;
        }

        h1 {
            padding: 50px;
        }
    </style>
</head>

<body>
    <?php

    $nome = "Rian"; // Texto (string)
    $idade = 16; // Inteiro (int)
    $telefone = "(19) 9 99507-2687"; // Texto (string)
    $dinheiro = 4500.46; // Decimal (float)
    $legal = true; // Verdadeiro/Falso (boolean)

    // Linha corrida
    // As aspas duplas permitem a exibição de variáveis, e chamamos elas com um $, como podemos ver em $nome, $idade, $telefone, $dinheiro e $legal
    // Concatenação em PHP é feita com um simples ponto ("."), e podemos observar a construção de um operador ternário entre os parentêses
    echo "<h1>Seu nome é $nome, você tem $idade anos, e teu telefone é: $telefone. Saldo atual: R$$dinheiro. Você é " . ($legal ? 'legal!' : 'chato') . " </h1>";

    // Quebra de linha
    // Mesma coisa, porém agora usamos a tag br, de break, para quebrar as linhas e exibir como se fosse uma lista
    echo "<h1>Nome: $nome <br>Idade: $idade <br>Telefone: $telefone <br>Saldo: R$$dinheiro <br>Legal: " . ($legal ? 'Sim' : 'Não') . " </h1>"
    ?>
</body>

</html>