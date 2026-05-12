<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S9_R1_AT1 | PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
</head>
<style>
    /* Reinicia espaçamentos padrão e aplica a fonte Lexend em toda a página */
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: 'Lexend', sans-serif;
    }

    /* Define o fundo centralizado da página e garante altura mínima para o layout */
    body {
        min-height: 100vh;
        background-color: #eef2ff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 24px;
    }

    h1 {
        margin-bottom: 18px;
        text-align: center;
        color: #2f3b57;
        letter-spacing: 0.03em;
    }

    /* Cada área branca com borda arredondada e sombra suave usa esta classe */
    .container {
        width: 100%;
        max-width: 520px;
        background-color: #ffffff;
        border-radius: 20px;
        box-shadow: 0 18px 40px rgba(59, 83, 176, 0.12);
        padding: 30px;
        margin-bottom: 30px;
    }

    .container h2 {
        margin-bottom: 22px;
        color: #334155;
        font-size: 1.35rem;
    }

    label {
        display: block;
        margin-top: 16px;
        margin-bottom: 8px;
        color: #475569;
        font-size: 0.95rem;
    }

    input,
    select {
        width: 100%;
        padding: 12px 14px;
        border: 1px solid #cbd5e1;
        border-radius: 12px;
        background-color: #f8fafc;
        font-size: 1rem;
        color: #1f2937;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    input:focus,
    select:focus {
        outline: none;
        border-color: #6366f1;
        box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.12);
        background-color: #ffffff;
    }

    /* Estiliza a seta dos selects para combinar com o visual dos campos de texto */
    select {
        appearance: none;
        background-image: linear-gradient(45deg, transparent 50%, #64748b 50%), linear-gradient(135deg, #64748b 50%, transparent 50%);
        background-position: calc(100% - 18px) calc(1em + 2px), calc(100% - 14px) calc(1em + 2px);
        background-size: 8px 8px, 8px 8px;
        background-repeat: no-repeat;
    }

    /* Botão principal do formulário com efeito de leve elevação ao passar o mouse */
    button {
        margin-top: 26px;
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 12px;
        background-color: #4f46e5;
        color: white;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: transform 0.2s ease, background-color 0.2s ease;
    }

    button:hover {
        background-color: #4338ca;
        transform: translateY(-1px);
    }

    .item {
        padding: 18px;
        background-color: #f8fafc;
        border-radius: 14px;
        margin-bottom: 18px;
        border: 1px solid #dbeafe;
    }
</style>

<body>
    <h1>Petshop XPTO123</h1>
    <div class="container">
        <h2>Cadastre seu pet!</h2>
        <!-- Formulário de cadastro do pet; quando enviado, os dados ficam disponíveis em $_POST -->
        <form action="" method="post">
            <label for="nome">Nome do seu pet:</label>
            <input type="text" name="nome" id="nome" placeholder="Ex: Bolinha">
            <label for="idd">Idade do seu pet:</label>
            <input type="number" name="idd" id="idd" placeholder="Ex: 2">
            <label for="tipo">Espécie do seu pet:</label>
            <select name="tipo" id="tipo">
                <option value="" disabled selected>Selecione a espécie</option>
                <option value="Cachorro">Cachorro</option>
                <option value="Gato">Gato</option>
                <option value="Ave">Ave</option>
                <option value="Peixe">Peixe</option>
                <option value="Outro">Outro</option>
            </select>
            <label for="raca">Raça do seu pet:</label>
            <input type="text" name="raca" id="raca" placeholder="Ex: Bull-terrier">
            <label for="cor">Cor do seu pet:</label>
            <input type="text" name="cor" id="cor" placeholder="Ex: Caramelo">
            <label for="porte">Porte do seu pet:</label>
            <select name="porte" id="porte">
                <option value="" disabled selected>Selecione o porte</option>
                <option value="Pequeno">Pequeno</option>
                <option value="Médio">Médio</option>
                <option value="Grande">Grande</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <?php
    /*
     * Função que exibe cada informação do pet em um bloco separado.
     * A idade recebe um texto extra "anos" para ficar mais legível.
     */
    if (isset($_POST["nome"], $_POST["idd"], $_POST["tipo"], $_POST["raca"], $_POST["cor"], $_POST["porte"])) {
        function exibirDado($label, $valor)
        {
            if ($label == "Idade") {
                echo "<div class='item'>";
                echo "<p>$label: $valor anos</p>";
                echo "</div>";
            } else {
                echo "<div class='item'>";
                echo "<p>$label: $valor </p>";
                echo "</div>";
            }
        }

        // Aqui exibimos todos os valores enviados pelo formulário de cadastro do pet.
        echo "<div class='container'>";
        echo "<h2>Dados do seu animal:</h2>";
        exibirDado("Nome", $_POST["nome"] ?? "");
        exibirDado("Idade", $_POST["idd"] ?? "");
        exibirDado("Espécie", $_POST["tipo"] ?? "");
        exibirDado("Raça", $_POST["raca"] ?? "");
        exibirDado("Cor", $_POST["cor"] ?? "");
        exibirDado("Porte", $_POST["porte"] ?? "");
        echo "</div>";
    }
    ?>
</body>

</html>