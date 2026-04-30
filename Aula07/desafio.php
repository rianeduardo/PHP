<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Salário</th>
        </tr>
<?php
$funcionarios = [
    ["nome" => "Ana", "cargo" => "Analista", "salario" => 3500],
    ["nome" => "Rian", "cargo" => "CEO", "salario" => 400000],
    ["nome" => "Larissa", "cargo" => "Professora", "salario" => 12000],
    ["nome" => "Ronaldo", "cargo" => "Programador Júnior", "salario" => 5000],
    ["nome" => "Renan", "cargo" => "Programador Sênior", "salario" => 20000],
    ["nome" => "Fernando", "cargo" => "DevOps", "salario" => 15000],
    ["nome" => "Laura", "cargo" => "Pentester", "salario" => 30000],
    ["nome" => "Lorenzo", "cargo" => "Blue Team", "salario" => 25000],
];

foreach ($funcionarios as $f) {
    echo "<tr><td>" . $f["nome"] . "</td><td>" . 
    $f["cargo"] . "</td><td>R$" . 
    $f["salario"] . "</td></tr>";
}
?>    
    </table>
</body>
</html>
