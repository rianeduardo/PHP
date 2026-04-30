<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4 | Aula 05</title>
</head>
<body>
    <?php 
        $setor = "DEVOPS";

        switch ($setor) {
            case 'TI':
                echo "<h1>Setor de T.I ( Técnologia da Informação )</h1>";
                break;
            case 'RH':
                echo "<h1>Setor de R.H ( Recursos Humanos )</h1>";
                break;
            case 'Financeiro':
                echo "<h1>Setor do Financeiro</h1>";
                break;
            case 'DEVOPS':
                echo "<h1>Setor de DevOps ( Operador Pipeline )</h1>";
                break;
            case 'Segurança':
                echo "<h1>Setor de Segurança da Informação</h1>";
                break;
            default:
                echo "<h1>Sem setor definido</h1>";
                break;
        }
    ?>
</body>
</html>