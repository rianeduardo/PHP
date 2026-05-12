<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 | Aula 10</title>
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>

<body>
    <?php
    include "header.php";
    setcookie("empresa", "rIAN", time() + 3600);
    echo "Cookie criado<br>";
    var_dump($_COOKIE);
    ?>
</body>

</html>