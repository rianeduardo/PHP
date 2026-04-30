<?php
    $numero = 5;

    echo "<table border='1'>";
    echo "<thead><tr><th>Multiplicação</th><th>Resultado</th></tr></thead>";
    echo "<tbody>";

    for ($i = 0; $i <= 10; $i++) {
        echo "<tr><td>{$numero} x {$i}</td><td>" . ($numero * $i) . "</td></tr>";
    }

    echo "</tbody>";
    echo "</table>";
?>