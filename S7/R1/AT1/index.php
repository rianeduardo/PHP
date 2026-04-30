<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S7_R1_AT1 | PHP</title>
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

        /* Estilização das células da tabela */
        th,
        td {
            padding: 15px;
            text-align: left;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Salas SENAI</h1>
    <!-- Tabela com borda, espaçamento, alinhamento, etc. O que definimos no style enfim -->
    <table border="1">
        <!-- Cabeçalhos -->
        <tr>
            <th>Código de Sala</th>
            <th>Professor Responsável</th>
            <th>Número de Máquinas</th>
            <th>Curso Principal</th>
        </tr>
        <?php
        // Array Associativo/Bidimensional => Código da sala, seu professor responsável, número de máquinas e curso principal
        $salas = [
            ["codigo" => "A001", "profResponsavel" => "Jorge", "numeroMaquinas" => 40, "curso" => "A.D.S"],
            ["codigo" => "A002", "profResponsavel" => "Diogo", "numeroMaquinas" => 40, "curso" => "A.D.S"],
            ["codigo" => "A003", "profResponsavel" => "Marcelo", "numeroMaquinas" => 20, "curso" => "Governança"],
            ["codigo" => "A004", "profResponsavel" => "Rian", "numeroMaquinas" => 60, "curso" => "Pentesting"],
            ["codigo" => "A005", "profResponsavel" => "Fernanda", "numeroMaquinas" => 40, "curso" => "S.I"],
            ["codigo" => "A006", "profResponsavel" => "Larissa", "numeroMaquinas" => 100, "curso" => "Engenharia da Computação"],
            ["codigo" => "A007", "profResponsavel" => "Murilo", "numeroMaquinas" => 100, "curso" => "Engenharia da Computação"],
            ["codigo" => "A008", "profResponsavel" => "Kaio", "numeroMaquinas" => 40, "curso" => "Cloud"],
            ["codigo" => "A009", "profResponsavel" => "Lorenzo", "numeroMaquinas" => 40, "curso" => "Cloud"],
            ["codigo" => "A010", "profResponsavel" => "Pedro", "numeroMaquinas" => 50, "curso" => "Redes"],
        ];

        // Pra cada sala, crie uma Table Row, onde cada Table Data é uma informação, uma célula pra código, pra professor, máquina e curso
        // Sempre concatenando!
        foreach ($salas as $s) {
            echo "<tr><td>" . $s["codigo"] . "</td><td>" .
                $s["profResponsavel"] . "</td><td>" .
                $s["numeroMaquinas"] . "</td><td>" .
                $s["curso"] . "</td></tr>";
        }
        ?>
    </table> <!--- Fecha tabela --->
</body>

</html>