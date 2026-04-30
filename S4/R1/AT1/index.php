<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S4_R1_AT1 - PHP</title>
</head>
<body>
    <?php 
        $empresa = "XPTO"; // Nome da empresa;
        $totalFuncionarios = 5954; // Total de funcionários
        $metaMensal = 1000000; // Meta de faturamento mensal em reais
        $faturamentoAtualMensal = 259664; // Faturamento atual mensal em reais
        $vendas = 500; // Número de vendas
        $vendasPassadas = 430; // Vendas do mês passado

        // Concatenando o nome da empresa e o número de funcionários
        echo "A " . $empresa . " atualmente possui " . $totalFuncionarios . " funcionários!";

        echo "<hr>"; // Linha

        // Concatenando meta mensal e faturamento mensal
        echo "Meta mensal: R$" . $metaMensal . "<br>Faturamento atual: R$" . $faturamentoAtualMensal;

        // Cálculo de quantos reais faltam para bater a meta
        $falta = $metaMensal - $faturamentoAtualMensal;

        // Concatenando a falta ao texto
        echo "<br><br>Faltam R$" . $falta . " para atingirmos nossa meta desse mês...";

        echo "<hr>"; // Linha

        // Superou as vendas do mês passado? 1 se sim, nulo se não
        $superou = $vendas >= $vendasPassadas;

        // Concatenando a pergunta
        echo "(1 = Sim | Nulo = Falso) Superamos as vendas do último mês? " . $superou;

        // Concatenando o número de vendas superadas
        echo "<br><br>Vendas superadas: " . $vendas - $vendasPassadas;
    ?>
</body>
</html>