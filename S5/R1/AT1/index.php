<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S5_R1_AT1 | PHP</title>
</head>
<body>
    <?php 
        $empresa = "XPTO"; // Nome da empresa
        $funcionarios = 500; // Número de funcionários
        $faturamentoMensal = 5384930; // Faturamento mensal em reais

        echo "<h1>Bem-vindo a $empresa</h1>"; // Mensagem de bem vindo padrão

        if ($funcionarios < 100) { // Empresa tem menos de 100 funcionários? = Baixo Porte | Menos de 200? = Médio Porte | Caso contrário = Grande Porte
            echo "<p>Somos uma empresa de <i>baixo</i> porte, com $funcionarios funcionários!</p>";
        } else if ($funcionarios < 200) { 
            echo "<p>Somos uma empresa de <i>médio</i> porte, com $funcionarios funcionários!</p>";
        } else {
            echo "<p>Somos uma empresa de <i>grande</i> porte, com $funcionarios funcionários!</p>";
        }

        echo "<hr>";

        $cargo = "CEO"; // Recebe o cargo, "CEO", "Gerente", "Supervisor" ou "Funcionário"

        switch ($cargo) {
            case 'CEO': // Mensagem para o CEO
                echo "<p>Olá senhor, o que deseja hoje?</p>";
                echo "<p>Faturamento mensal: R$$faturamentoMensal</p>";
                break;
            case 'Gerente': // Mensagem para o Gerente
                echo "<p>Olá gerente, pronto para gerir sua equipe?</p>";
                echo "<p>Precisam de você no: Laboratório A159</p>";
                break;
            case 'Supervisor': // Mensagem para o Supervisor
                echo "<p>Olá, supervisor</p>";
                echo "<p>Sua equipe tem pendências no projeto ID304S, ID3029F, ID291G</p>";
                break;
            case 'Funcionário': // Mensagem para o Funcionário
                echo "<p>Bem-vindo(a)</p>";
                echo "<p>Local de trabalho: Laboratório A159</p>";
                echo "<p>Pendência urgente: ID304S</p>";
                break;
            default: // Mensagem de erro
                echo "[ERRO] Cargo não encontrado...";
                break;
        }

        echo "<hr>";

        $anosEmpresa = 23;

        if ($anosEmpresa < 10) {
            echo "<p><i>Ainda não somos uma empresa consolidada... Apenas $anosEmpresa anos de atuação</i><p>";
        } else {
            echo "<p><strong>Somos uma empresa forte e consolidada! Com $anosEmpresa anos de atuação</strong></p>";
        }
    ?>
</body>
</html>